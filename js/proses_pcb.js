// Dropdown
function cek_db() {
    var id_in = $('#id_in').val();
    $.ajax({
        url: 'cek_db.php',
        data: "id_in=" + id_in,
    }).success(function(data) {
        var json = data,
            obj = JSON.parse(json);
        $('#spec').val(obj.spec_pcb);
        $('#jumlah').val(obj.jumlah);
    });
}

// start order
function start_order(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_verif = n;
    $('#date').val(start_verif);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'save_order.php',
        data: data,
    });
}

// Stop Order
function stop_order(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_verif = n;
    $('#date2').val(stop_verif);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_order.php',
        data: data,
    });
}

// Start Potong PCB
function start_potong(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_potong = n;
    $('#date_p').val(start_potong);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_potong.php',
        data: data,
    });
}

// Stop Potong
function stop_potong(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_potong = n;
    $('#date_potong2').val(stop_potong);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_potong.php',
        data: data,
    });
}

// Start cetak bawah
function start_ctkb(){
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_ctkb = n;
    $('#date_ctkb').val(start_ctkb);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_ctkb.php',
        data: data,
    });
}

// Stop cetak bawah
function stop_ctkb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ctkb = n;
    $('#date_ctkb2').val(stop_ctkb);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_ctkb.php',
        data: data,
    });
}

// Start cetak atas
function start_ctka() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_ctka = n;
    $('#date_ctka').val(start_ctka);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_ctka.php',
        data: data,
    });
}

// Stop cetak atas
function stop_ctka() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ctka = n;
    $('#date_ctka2').val(stop_ctka);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_ctka.php',
        data: data,
    });
}

// Start masking bawah
function start_mb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_mb = n;
    $('#date_mb').val(start_mb);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_mb.php',
        data: data,
    });
}

// Stop masking bawah
function stop_mb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_mb = n;
    $('#date_mb2').val(stop_mb);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_mb.php',
        data: data,
    });
}

// Start masking atas
function start_ma() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ma = n;
    $('#date_ma').val(stop_ma);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_ma.php',
        data: data,
    });
}

// Stop masking atas
function stop_ma() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_ma = n;
    $('#date_ma2').val(stop_ma);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_ma.php',
        data: data,
    });
}

// Start silkscreen bawah
function start_sb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_sb = n;
    $('#date_sb').val(start_sb);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_sb.php',
        data: data,
    });
}

// Stop silkscreen bawah
function stop_sb() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_sb = n;
    $('#date_sb2').val(stop_sb);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_sb.php',
        data: data,
    });
}

// Start silkscreen atas
function start_sa() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_sa = n;
    $('#date_sa').val(start_sa);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_sa.php',
        data: data,
    });
}

// Stop silkscreen atas
function stop_sa() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_sa = n;
    $('#date_sa2').val(stop_sa);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_sa.php',
        data: data,
    });
}

// Start bor
function start_bor() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_bor = n;
    $('#date_bor').val(start_bor);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_bor.php',
        data: data,
    });
}

// Stop bor
function stop_bor() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_bor = n;
    $('#date_bor2').val(stop_bor);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_bor.php',
        data: data,
    });
}

// Start plating
function start_plat() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_plat = n;
    $('#date_plat').val(start_plat);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_plat.php',
        data: data,
    });
}

// Stop plating
function stop_plat() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_plat = n;
    $('#date_plat2').val(stop_plat);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_plat.php',
        data: data,
    });
}

// Start finishing
function start_fi() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_fi = n;
    $('#date_fi').val(start_fi);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_fi.php',
        data: data,
    });
}

// Stop finishing
function stop_fi() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_fi = n;
    $('#date_fi2').val(stop_fi);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_fi.php',
        data: data,
    });
}

// Start quality control
function start_qc() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_qc = n;
    $('#date_qc').val(start_qc);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_qc.php',
        data: data,
    });
}

// Stop quality control
function stop_qc() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_qc = n;
    $('#date_qc2').val(stop_qc);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_qc.php',
        data: data,
    });
}

// Start packing
function start_pack() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var start_pack = n;
    $('#date_pack').val(start_pack);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'start_pack.php',
        data: data,
    });
}

// Stop packing
function stop_pack() {
    var d = new Date();
    var n = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate()+" "+d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var stop_pack = n;
    $('#date_pack2').val(stop_pack);
    var data = $('.aksi').serialize();
    $.ajax({
        type: 'POST',
        url: 'stop_pack.php',
        data: data,
    });
}
