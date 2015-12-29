<div class="confirm-order navs">
    <h3 class="confirm-title">Konfirmasi Order</h3>
    <div>
        <p>Silakan masukkan kode order yang mau anda cari!</p>
        {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
            <input type="text" class="input-large inputbox" placeholder="Kode Order" name="kodeorder" required>
            <button type="submit" class="cart-button"><i class="fa fa-check"></i> Cari Kode</button>
        {{Form::close()}}
    </div>
</div>