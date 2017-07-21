<div class="pages">
    <h3>{{$nama}}</h3>
</div>
<div class="row-fluid">
    <div class="span8 list">
        @foreach(list_testimonial() as $key=>$value)
        <article class="testimonial">
            <h5>{{ucwords($value->nama)}}</h5>
            <p>{{substr($value->isi,0,250)}}</p>
        </article>
        @endforeach
        {{list_testimonial()->links()}}
    </div>
    <aside class="span4 sidetesti">
        <p class="title-testi"><strong>Kirim Testimonial</strong></p>
        <form action="{{url('testimoni')}}" method="post">
            <label>Nama</label>
            <input type="text" name="nama" class="txt inputname" value="{{Input::old('nama')}}" required style="width: 100%;">
            <br><br>
            <label>Testimonial</label>
            <textarea name="testimonial" class="textarea" rows="3" required style="width: 100%;">{{Input::old('testimonial')}}</textarea>
            <br><br>
            <input type="submit" class="cart-button pull-right" value="Kirim Testimonial">
            <br><br>
        </form>
    </aside>
</div>