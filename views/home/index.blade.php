<section class="feat">
    <div class="row-fluid">
        <div class="span12">
            <h3>PRODUK KAMI</h3>
            <div class="span12">
                @foreach(home_product() as $key=>$myproduk)
                <div class="tab-pane active" id="feat">
                    <article class="span4 article-img">
                        <span id="harga" class="badge badge-inverse">{{price($myproduk->hargaJual)}}</span>

                        @if(is_outstok($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/img/stok-badge.png" class="outstok-badge">
                        @elseif(is_produkbaru($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/img/new-badge.png" class="new-badge">
                        @elseif(is_terlaris($myproduk))
                            <img src="//d3kamn3rg2loz7.cloudfront.net/assets/farmashop/img/terlaris-badge.png" class="best-badge">
                        @endif

                        <div class="view view-thumb">
                            <img class="img-home" src="{{ url(product_image_url($myproduk->gambar1,'medium')) }}" alt="{{shortName($myproduk->nama,25)}}" />
                            <div class="mask">
                                <p>{{short_description($myproduk->deskripsi,100)}}</p>
                                <a href="{{product_url($myproduk)}}" class="buy">Beli</a>
                            </div>
                        </div>
                        <p>
                            <a class="navi-blog" href="{{product_url($myproduk)}}">
                                {{short_description($myproduk->nama,77)}}
                            </a>
                        </p>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
