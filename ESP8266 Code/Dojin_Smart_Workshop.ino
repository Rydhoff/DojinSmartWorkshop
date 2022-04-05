// IMPORT LIBRARY SENSOR DHT
#include <DHT.h> 
// IMPORT LIBRARY ESP8266 YANG DIBUTUHKAN
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

const char* ssid = "Idho"; // NAMA WIFI
const char* password = "munyenye"; // PASSWORD WIFI

const char* host = "bengkeltei.000webhostapp.com"; // NAMA WEB YANG AKAN DIAKSES

#define dhtPin 5 // PIN 5 GPIO SEBAGAI PIN DATA SENSOR
#define dhtType DHT11 // TIPE DHT SENSOR
DHT dht(dhtPin,dhtType); // INSIALISASI SENSOR DHT

#define pinLampu1 4 // PIN 4 GPIO SEBAGAI PIN LAMPU 1
#define pinLampu2 14 // PIN 14 GPIO SEBAGAI PIN LAMPU 2
#define pinAc 12 // PIN 12 GPIO SEBAGAI PIN AC
#define pinKipas 13 // PIN 13 GPIO SEBAGAI PIN KIPAS
#define pinProyektor 3 // PIN 3 GPIO SEBAGAI PIN PROYEKTOR

void setup() {
  Serial.begin(115200); // MEMULAI SERIAL MONITOR
  Serial.println("Menghubungkan ke WiFi"); 

  WiFi.begin(ssid, password); // MEMULAI WIFI

  while(WiFi.status() != WL_CONNECTED) {
    Serial.println(".");
    delay(500);
  }

  Serial.println("WiFi Terhubung");

  dht.begin(); // MEMULAI SENSOR DHT

  // SET PIN SEBAGAI OUTPUT UNTUK MENGIRIM SINYAL KE RELAY
  pinMode(pinLampu1,OUTPUT); 
  pinMode(pinLampu2,OUTPUT);
  pinMode(pinAc,OUTPUT);
  pinMode(pinKipas,OUTPUT);
  pinMode(pinProyektor,OUTPUT);
}



void loop() {
  
  // MENGHUBUNGKAN KE WEB
  WiFiClient client;
  const int port = 80;
  if(!client.connect(host, port)){
    Serial.println("Gagal Menghubungkan ke Web");
    digitalWrite(pinLampu1,LOW); 
    digitalWrite(pinLampu2,LOW); 
    digitalWrite(pinAc,LOW); 
    digitalWrite(pinKipas,LOW); 
    digitalWrite(pinProyektor,LOW); 
    return;
  }

  Serial.println("Terhubung dengan Web");
  
  float suhu = dht.readTemperature(); // MEMBACA NILAI SUHU DARI SENSOR DHT
  int kelembapan = dht.readHumidity();// MEMBACA NILAI KELEMBAPAN DARI SENSOR DHT

  Serial.println("Suhu : " + String(suhu)); // MENCETAK NILAI SUHU DI SERIAL MONITOR
  Serial.println("Kelembapan : " + String(kelembapan)); // MENCETAK NILAI KELEMBAPAN DI SERIAL MONITOR

  HTTPClient httpSensor; // SET SEBAGAI CLIENT
  // MENGIRIM DATA NILAI SENSOR KE WEB MELALUI METODE GET LINK ATAU URL
  String sendSensor = "http://" +String(host)+ "/Ruang-1/status/sendsensor.php?suhu=" + String(suhu) + "&kelembapan=" + String(kelembapan); 
  httpSensor.begin(client,sendSensor); // MENGAKSES LINK WEB
  httpSensor.GET(); // MENGAMBIL DATA SENSOR TERKIRIM ATAU TIDAK KE DATABASE WEB
  String nilaiSensor = httpSensor.getString();  // MERUBAH DATA SENSOR MENJADI HURUF
  Serial.println(nilaiSensor); // CETAK HASIL PENGIRIMAN DI SERIAL MONITOR
  httpSensor.end(); // MENUTUP LINK WEB
  
  HTTPClient httpLampu1; // SET SEBAGAI CLIENT
  // LINK WEB YANG BERISI DATA PERANGKAT
  String LinkLampu1 = "http://" +String(host)+ "/Ruang-1/status/datalampu1.php";
  httpLampu1.begin(client,LinkLampu1); // MENGAKSES LINK WEB
  httpLampu1.GET(); // MENGAMBIL DATA PERANGKAT DI WEB
  String nilaiLampu1 = httpLampu1.getString(); // MERUBAH DATA PERANGKAT WEB MENJADI HURUF
  Serial.println(nilaiLampu1); // MENCETAK DATA PERANGKAT WEB DI SERIAL MONITOR
  httpLampu1.end(); // MENUTUP LINK WEB
  digitalWrite(pinLampu1, nilaiLampu1.toInt()); // MANGAMBIL DATA PERANGKAT DI WEB LALU SET STATUS PIN PERANGKAT

  HTTPClient httpLampu2;
  String LinkLampu2 = "http://" +String(host)+ "/Ruang-1/status/datalampu2.php";
  httpLampu2.begin(client,LinkLampu2);
  httpLampu2.GET();
  String nilaiLampu2 = httpLampu2.getString();
  Serial.println(nilaiLampu2);
  httpLampu2.end();
  digitalWrite(pinLampu2, nilaiLampu2.toInt());

  HTTPClient httpAc;
  String LinkAc = "http://" +String(host)+ "/Ruang-1/status/dataac.php";
  httpAc.begin(client,LinkAc);
  httpAc.GET();
  String nilaiAc = httpAc.getString();
  Serial.println(nilaiAc);
  httpAc.end();
  digitalWrite(pinAc, nilaiAc.toInt());

  HTTPClient httpKipas;
  String LinkKipas = "http://" +String(host)+ "/Ruang-1/status/datakipas.php";
  httpKipas.begin(client,LinkKipas);
  httpKipas.GET();
  String nilaiKipas = httpKipas.getString();
  Serial.println(nilaiKipas);
  httpKipas.end();
  digitalWrite(pinKipas, nilaiKipas.toInt());

  HTTPClient httpProyektor;
  String LinkProyektor = "http://" +String(host)+ "/Ruang-1/status/dataproyektor.php";
  httpProyektor.begin(client,LinkProyektor);
  httpProyektor.GET();
  String nilaiProyektor = httpProyektor.getString();
  Serial.println(nilaiProyektor);
  httpProyektor.end();
  digitalWrite(pinProyektor, nilaiProyektor.toInt());

  delay(1000); // JEDA 1 DETIK UNTUK MENJALANKAN PROGRAM
}
