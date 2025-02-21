document.addEventListener("DOMContentLoaded", function () {
    // Modal elementi oluştur ve `body` içine ekle
    const modal = document.createElement("div");
    modal.id = "bariwell-modal";
    modal.classList.add("bariwell-modal");
    document.body.appendChild(modal);

    // Başlangıçta modal kapalı olacak
    modal.classList.remove("active");

    document.getElementById("bariwell-form").addEventListener("submit", function (event) {
        event.preventDefault();

        let height = parseFloat(document.getElementById("height").value) / 100;
        let weight = parseFloat(document.getElementById("weight").value);
        let bmi = weight / (height * height);
        let message = "";
        let resultClass = "";

        const surgeryLink = "https://kaanergun.com"; // Admin panelinden gelen link buraya eklenebilir

        if (bmi >= 40) {
            message = "Bariatrik operasyon için uygun bir aday olabilirsiniz.";
            resultClass = "success";
        } else if (bmi >= 35 && bmi < 40) {
            message = "Bariatrik operasyon için değerlendirilebilirsiniz.";
            resultClass = "warning";
        } else {
            message = "Bariatrik operasyon için uygun değilsiniz.";
            resultClass = "error";
        }

        // Modal içeriğini oluştur
        modal.innerHTML = `
            <div class="bariwell-modal-content">
                <h2>BMI Sonucu</h2>
                <div class="bariwell-result ${resultClass}">BMI Değeriniz: ${bmi.toFixed(2)}</div>
                <p>${message}</p>
                <p><a href="${surgeryLink}" target="_blank" class="bariwell-link">Daha fazla bilgi için tıklayın.</a></p>
                <button id="bariwell-modal-close" class="bariwell-modal-close">Kapat</button>
            </div>
        `;

        // Modalı aç
        modal.classList.add("active");

        // Modalı kapatma işlemi
        document.getElementById("bariwell-modal-close").addEventListener("click", function () {
            modal.classList.remove("active");
        });

        modal.addEventListener("click", function (e) {
            if (e.target === modal) {
                modal.classList.remove("active");
            }
        });
    });
});
