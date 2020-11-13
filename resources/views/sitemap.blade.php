<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach($data_category as $data)
  <sitemap>
    <loc>www.shierproject.com/{{ $data->url_title }}/sitemap.xml</loc>
    <lastmod>{{ $data->created_at }}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.6</priority>
  </sitemap>
  @endforeach
</sitemapindex>