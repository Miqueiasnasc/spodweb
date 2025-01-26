document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registrationForm");
    const cpfInput = document.getElementById("cpf");
    const phoneInput = document.getElementById("phone");
    const message = document.getElementById("message");
  
    // Máscara para CPF
    cpfInput.addEventListener("input", () => {
      let cpf = cpfInput.value.replace(/\D/g, "");
      cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
      cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
      cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
      cpfInput.value = cpf;
    });
  
    // Máscara para Telefone
    phoneInput.addEventListener("input", () => {
      let phone = phoneInput.value.replace(/\D/g, "");
      phone = phone.replace(/^(\d{2})(\d)/, "($1) $2");
      phone = phone.replace(/(\d{4,5})(\d{4})$/, "$1-$2");
      phoneInput.value = phone;
    });
  
    // Validação de CPF
    function isValidCPF(cpf) {
      cpf = cpf.replace(/\D/g, "");
  
      if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false;
  
      const calc = (factor, slice) =>
        cpf
          .slice(0, slice)
          .split("")
          .reduce((sum, num, index) => sum + num * (factor - index), 0);
  
      const digit1 = (calc(10, 9) * 10) % 11 % 10;
      const digit2 = (calc(11, 10) * 10) % 11 % 10;
  
      return digit1 === Number(cpf[9]) && digit2 === Number(cpf[10]);
    }
  
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      message.textContent = "";
  
      const cpf = cpfInput.value;
  
      if (!isValidCPF(cpf)) {
        message.textContent = "CPF inválido.";
        cpfInput.focus();
        return;
      }
  
      message.textContent = "Formulário enviado com sucesso!";
      message.style.color = "green";
      form.reset();
    });
  });
  