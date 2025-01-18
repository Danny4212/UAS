document.addEventListener('DOMContentLoaded', () => {
    const paymentMethod = document.getElementById('paymentMethod');
    const codDetails = document.getElementById('codDetails');
    const creditCardDetails = document.getElementById('creditCardDetails');

    paymentMethod.addEventListener('change', () => {
        const selectedMethod = paymentMethod.value;
        codDetails.style.display = 'none';
        creditCardDetails.style.display = 'none';
        methodDescription.innerHTML = '';

  if (selectedMethod === 'cash on delivery') {
      codDetails.style.display = 'block';
      methodDescription.innerHTML = '<p>Anda akan membayar di saat barang diterima.</p>';
    } else if (selectedMethod === 'credit card') {
      creditCardDetails.style.display = 'block';
      methodDescription.innerHTML = '<p>Silakan masukkan rincian kartu kredit Anda.</p>';
    }
    });
});
