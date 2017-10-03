<div class="prime pages">
    <h3>{{$title}}</h3>
</div>

<section class="blog row-fluid navs">
    <div class="span8 list">
    @if(count(list_blog(null,@$blog_category)) > 0)
        @foreach(list_blog(null,@$blog_category) as $value)
        <article>
            <a href="{{ blog_url($value) }}" class="navi-blog"><h4>{{$value->judul}}</h4></a>
            <p><small class="date"><i class="fa fa-calendar"></i> {{waktuTgl($value->updated_at)}}</small></p>
            <img src="{{ imgString($value->isi) }}" class="blog-img" />
            <div>
                {{short_description($value->isi,300)}}
            </div>
            <p><a href="{{ blog_url($value) }}" class="theme">Baca Selengkapnya →</a></p>
        </article>
        @endforeach
        
        <div class="pagination pagination-centered">
            {{list_blog(null,@$blog_category)->links()}}
        </div>
    @else
        <article class="notfound">Blog tidak ditemukan.</article>
    @endif
    </div>

    <div class="span4 sidebar">
        @if(recentBlog()->count() > 0)
        <aside>
            <p class="title-sidebar"><i class="fa fa-rss"></i> Artikel Baru</p>
            <ul>
                @foreach(recentBlog() as $recent)
                <li>
                    <a href="{{ blog_url($recent) }}">{{$recent->judul}}</a><br />
                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<small>{{waktuTgl($recent->created_at)}}</small>
                </li>
                @endforeach
            </ul>
        </aside>
        @endif
        @if(list_blog_category()->count() > 0)
        <aside class="clearfix tags">
            <p class="title-sidebar"><i class="fa fa-tag"></i> Kategori</p>
            @foreach(list_blog_category() as $value)
            <span><a href="{{ blog_category_url($value) }}">{{$value->nama}}</a></span>
            @endforeach
        </aside>
        @endif
        <aside>
            {{pluginSidePowerup()}}
        </aside>
    </div>
</section>