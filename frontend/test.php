<!-- TYHLE TAGY MUSI BYT V HLAVICCE -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<meta name="csrf_name" content="<?= $name ?>" />
<meta name="csrf_value" content="<?= $value ?>" />

<!-- TAKHLE PROPISEME CELKOVY POCET HLASU -->
<h1> helou <?= $votes_count ?> </h1>

<!-- INPUT EMAILU V POPUPU POTREBUJE id="email_input" -->
<input type="text" name="email_input" id="email_input">
<!-- JEDNOTLIVY BUTTONY PRO HLASOVANI AKORAT JINY ID -->
<button id="button_project_1">VOTE 1</button>
<button id="button_project_2">VOTE 2</button>
<button id="button_project_3">VOTE 3</button>

<!-- TENHLE SCRIPT NA KONCI BODY -->
<script src="frontend/js/vote.js"></script>
