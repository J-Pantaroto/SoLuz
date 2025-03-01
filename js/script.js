document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
        duration: 1200,
        once: true,
        easing: 'ease-in-out',
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const whatsappBtn = document.getElementById("whatsapp-btn");

    whatsappBtn.addEventListener("click", function() {
        const whatsappMessage = "Olá, gostaria de saber mais sobre energia solar!";
        const whatsappNumber = "6798248522"; // Substitua pelo seu número com DDD
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

        window.open(whatsappURL, "_blank");
    });
});

//email

/* document.addEventListener("DOMContentLoaded", function () {
    const emailForm = document.getElementById("email-form");

    emailForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const formData = new FormData(emailForm);
        const submitButton = emailForm.querySelector("button");
        submitButton.innerText = "Enviando...";
        submitButton.disabled = true;

        fetch("php/contato.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            submitButton.innerText = "Entrar em Contato por E-mail";
            submitButton.disabled = false;
            emailForm.reset();
        })
        .catch(error => {
            alert("Erro ao enviar a mensagem. Tente novamente.");
            submitButton.innerText = "Entrar em Contato por E-mail";
            submitButton.disabled = false;
        });
    });
});
 */
