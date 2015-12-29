<div class="row-fluid">
    <div class="span3 hidden-phone">
        <div class="sidebar">
            {{pluginSidePowerup()}}
            <section>
                @foreach(vertical_banner() as $item)
                <div>
                    <a href="{{url($item->url)}}">
                        <img src="{{ url(banner_image_url($item->gambar)) }}" alt="Info Promo" />
                    </a>
                </div>
                @endforeach
            </section>
            <section>
                <h5>Hubungi Kami</h5>
                @if(!empty($shop->ym))
                {{ymyahoo($shop->ym)}}
                <br><br>
                @endif
                @if(!empty($shop->telepon))
                <address class="row-fluid">
                    <div class="pull-left clabel sep-home1" id="sidephone"><i class="fa fa-mobile"></i></div>
                    <div class="pull-left cdata"> {{$shop->telepon}}</div>
                </address>
                @endif
                @if(!empty($shop->hp))
                <address class="row-fluid">
                    <div class="pull-left clabel sep-home1" id="sidehp"><i class="fa fa-phone-square"></i></div>
                    <div class="pull-left cdata"> {{$shop->hp}}</div>
                </address>
                @endif

                @if(!empty($shop->email))
                <address class="row-fluid">
                    <div class="pull-left sep-home1" id="sidemail"><i class="fa fa-envelope"></i></div>
                    <div class="pull-left cdata"><a class="navi-blog" href="mailto:{{$shop->email}}" target="_top">{{$shop->email}}</a></div>
                </address>
                @endif
                @if(!empty($shop->bb))
                <address class="row-fluid">
                    <div class="pull-left clabel sep-home1" id="sidebbm">
                        <img src="{{url('img/bbm.png')}}" alt="BBM" id="imgbbm">
                    </div>
                    <div class="pull-left cdata">{{ $shop->bb }}</div>
                </address>
                @endif
            </section>

            <section>
                <h5>Testimonial</h5>
                <span>
                    <ul>
                        @foreach (list_testimonial() as $items)
                        <li>
                            <a href="#">{{ $items->isi }}</a><br />
                            <small>oleh <strong>{{ $items->nama }}</strong></small>
                        </li>
                        @endforeach
                    </ul>
                    <strong><a href="{{url('testimoni')}}" class="pull-right">More..</a></strong>
                </span>
            </section>
        </div>
    </div>

    <div class="span9">
        <div class="row-fluid">
            <div class="tab-content sideline">
                @foreach(home_product() as $myproduk)   
                <article>
                    <span id="harga" class="badge badge-inverse">{{price($myproduk->hargaJual)}}</span>

                    @if(is_outstok($myproduk))    
                        {{is_outstok($myproduk)}}
                    @elseif(is_produkbaru($myproduk))   
                        {{is_produkbaru($myproduk)}}
                    @elseif(is_terlaris($myproduk)) 
                        {{is_terlaris($myproduk)}}
                    @endif  

                    <div class="view thumb-prod">
                        <img src="{{ url(product_image_url($myproduk->gambar1,'medium')) }}" alt="{{$myproduk->nama}}" class="img1" id="" />
                        <div class="mask">
                            <p>{{short_description($myproduk->deskripsi,100)}}</p>
                            <a href="{{product_url($myproduk)}}" class="buy">Beli</a>
                        </div>
                    </div>
                    <p><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama,32)}}</a></p>
                </article>
                @endforeach
            </div>
        </div>
    </div>
</div>