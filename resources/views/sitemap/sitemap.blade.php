<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">
  @foreach($sitemap as $data)
  <url>
    <loc>www.shierproject.com</loc>
    <news:news>
        <news:publication>
            <news:name>Shier Project</news:name>
            <news:language>id</news:language>
        </news:publication>
        <news:publication_date>{{ $data->publish_date }}</news:publication_date>
        <news:title>{{ $data->title }}</news:title>
        <news:keywords>{{ $data->title }}</news:keywords>
    </news:news>
  </url>
  @endforeach
</urlset>