let search = document.querySelector(".search-box");

document.querySelector("#search-icon").onclick = () => {
  search.classList.toggle("active");
};

document.addEventListener("DOMContentLoaded", function () {
  const searchBox = document.querySelector(".search-box");
  const searchIcon = document.querySelector("#search-icon");
  const contactForm = document.getElementById("contactForm");

  if (searchIcon) {
    searchIcon.onclick = () => {
      searchBox.classList.toggle("active");
    };
  }
});

const paymentMethod = document.getElementById("paymentMethod");
const methodDescription = document.getElementById("methodDescription");

paymentMethod.addEventListener("change", function () {
  let description = "";
  switch (this.value) {
    case "cash on delivery":
      description = "Anda akan membayar tunai saat barang diterima.";
      break;
    case "credit card":
      description = "Silakan masukkan detail kartu kredit Anda untuk menyelesaikan pembayaran.";
      break;
    case "paytm":
      description = "Pembayaran akan dilakukan melalui aplikasi Paytm.";
      break;
    case "paypal":
      description = "Anda akan diarahkan ke PayPal untuk menyelesaikan pembayaran.";
      break;
    default:
      description = "";
  }
  methodDescription.textContent = description;
});

document.getElementById("paymentForm").addEventListener("submit", function (event) {
  event.preventDefault();
  const selectedMethod = paymentMethod.value;
  if (selectedMethod) {
    alert("Anda memilih metode pembayaran: " + selectedMethod);
  } else {
    alert("Silakan pilih metode pembayaran.");
  }
});
