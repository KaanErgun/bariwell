# 📌 Bariwell - BMI Hesaplayıcı WordPress Eklentisi

**Bariwell**, kullanıcıların **Vücut Kitle İndeksi (BMI)** hesaplamasını sağlayan, bariatrik cerrahi uygunluk durumunu değerlendiren ve sonucu **modern bir modal pencere (popup) içinde gösteren** bir WordPress eklentisidir.

---

## 🚀 Özellikler

✅ **Basit ve hızlı BMI hesaplama**  
✅ **Bariatrik cerrahi uygunluğu değerlendirme**  
✅ **Tam ekran ve mobil uyumlu modal pencere**  
✅ **Temadan bağımsız çalışır, her WordPress temasıyla uyumludur**  
✅ **Dışarı tıklanınca veya butona basınca modal kapanır**  
✅ **WordPress admin panelinden özelleştirilebilir cerrahi bilgi linki**  

---

## 📥 Kurulum

1️⃣ **Eklentiyi İndir**  
   - **ZIP dosyasını** indir veya `bariwell` klasörünü el ile oluşturun.  
   
2️⃣ **WordPress'e Yükleyin**  
   - `bariwell` klasörünü WordPress `wp-content/plugins/` dizinine yükleyin.  
   - WordPress **Admin Paneli** → **Eklentiler** → **Bariwell** eklentisini **etkinleştirin**.

---

## 🛠 Kullanım

### 🎯 **1️⃣ Kısa Kodu Kullanarak BMI Hesaplayıcıyı Ekleyin**
Herhangi bir WordPress sayfasına veya yazısına şu kısa kodu ekleyerek BMI hesaplayıcıyı kullanabilirsiniz:

```
[bariwell_calculator]
```

---

### 🎛 **2️⃣ Ayarlar Sayfasından Özelleştirme**
Admin panelinde, **Bariwell** menüsü altında eklenti ayarlarını yapabilirsiniz:

- **Bariatrik Cerrahi Bilgi Linki**: BMI değeri yüksek çıkan kullanıcılara yönlendirme için özel bir link ekleyin.

---

## 📌 Dosya Yapısı

```
/bariwell/
│── bariwell.php  (Ana eklenti dosyası)
│── /includes/
│   ├── settings.php  (Admin paneli ayarları)
│   ├── calculator.php  (BMI hesaplayıcı ve modal)
│── /assets/
│   ├── style.css  (Tüm CSS dosyası)
│   ├── script.js  (Tüm JS dosyası)
│── README.md  (Bu dosya)
```

---

## 🛠 Geliştirici Notları

- **CSS ve JS güncellemelerinin uygulanması için** WordPress’te önbelleği temizleyin.  
- **Modalın doğru şekilde çalışması için** `wp_enqueue_scripts` ile `style.css` ve `script.js` dosyalarının yüklendiğinden emin olun.  
- **Sorun yaşarsanız** tarayıcınızın geliştirici araçlarından (`F12` → `Console`) hata olup olmadığını kontrol edebilirsiniz.

---

## 📝 Lisans

Bu proje **Açık Kaynak** olarak paylaşılmıştır. **İstediğiniz gibi değiştirebilir ve geliştirebilirsiniz.**

---

**📢 Geri Bildirim & Destek:**  
Bu eklenti ile ilgili herhangi bir **soru, öneri veya hata bildirimi** yapmak isterseniz, **bağlantıya eklediğiniz bilgi linki üzerinden iletişime geçebilirsiniz**.  
