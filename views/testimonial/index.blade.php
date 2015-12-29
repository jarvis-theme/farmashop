<div class="pages">
    <h3>{{$nama}}</h3>
</div>
<div class="row-fluid">
    <div class="span8 list">
        @foreach(list_testimonial() as $key=>$value)
        <article class="testimonial">
            <a href="#" class="navi-blog"><h4>{{$value->nama}}</h4></a>
            <p><small class="date"><i class="fa fa-calendar"></i> {{waktuTgl($value->created_at)}}</small></p>
            <p>{{substr($value->isi,0,250)}}</p>
        </article>
        @endforeach
        {{list_testimonial()->links()}}
    </div>
    <aside class="span4 sidetesti">
        <p class="title-testi"><strong>Kirim Testimonial</strong></p>
        <form action="{{url('testimoni')}}" method="post">
            <label>Nama</label>
            <input type="text" name="nama" class="input-text inputname" required >
            <br><br>
            <label>Testimonial</label>
            <textarea name="testimonial" class="textarea" required></textarea>
            <br><br>
            <input type="submit" style="float:right" class="cart-button" value="Kirim Testimonial">
            <br><br>
        </form>
    </aside>
</div>