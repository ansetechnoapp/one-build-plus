<script src="assets/libs/particles.js/particles.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        var checkboxes = [
            {
                checkboxId: 'input_registration_andf',
                hiddenInputId: 'input_hidden_registration_andf',
                percentage: 0.20
            },
            {
                checkboxId: 'input_formality_fees',
                hiddenInputId: 'input_hidden_formality_fees',
                percentage: 0.30
            },
            {
                checkboxId: 'input_notary_fees',
                hiddenInputId: 'input_hidden_notary_fees',
                percentage: 0.05
            }
        ];
    
        var inputPrice = document.getElementById('input_price');
        var montantTotal = document.getElementById('montant_total');
    
        checkboxes.forEach(function (checkbox) {
            var checkboxElement = document.getElementById(checkbox.checkboxId);
            var hiddenInputElement = document.getElementById(checkbox.hiddenInputId);
    
            checkboxElement.addEventListener('change', function () {
                if (checkboxElement.checked) {
                    var priceValue = parseFloat(inputPrice.value);
                    var calculatedValue = priceValue * checkbox.percentage;
                    hiddenInputElement.value = calculatedValue.toFixed(2);
                } else {
                    hiddenInputElement.value = '0';
                }
    
                // Calcul de la somme totale
                var total = checkboxes.reduce(function (acc, curr) {
                    var hiddenInput = document.getElementById(curr.hiddenInputId);
                    return acc + parseFloat(hiddenInput.value);
                }, 0);
    
                /* montantTotal.value = total.toFixed(1); */
                var calculatedValue2 = parseFloat(total) + parseFloat(inputPrice.value);
                montantTotal.value = calculatedValue2.toFixed(2);
            });
        });
    </script>