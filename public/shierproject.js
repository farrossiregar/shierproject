$(document).ready(function(){
    var rss_antara = 'https://www.antaranews.com/rss/terkini';
    //var rss_republika = 'http://www.republika.co.id/rss/ekonomi/';
    //var rss_republika = 'http://sindikasi.okezone.com/index.php/celebrity/RSS2.0';
    var rss_republika = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCvC4D8onUfXzvjTOM-dBfEA';

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      var xml = this;
        var x, i, xmlDoc, txt;
        xmlDoc = xml.responseXML;
        txt = "";
        x = xmlDoc.getElementsByTagName("title");
        for (i = 0; i<= 10; i++) {
          txt += x[i].childNodes[0].nodeValue + '<br>';
          if(xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue == 'ANTARA News - Berita Terkini'){

          }else{
            var image_antara = xmlDoc.getElementsByTagName("description")[i].childNodes[0].nodeValue;
            var image_antara_first = image_antara.indexOf('src=');
            var image_antara_last = image_antara.indexOf('.jpg');
            var image_antara_source = image_antara.substring(image_antara_first + 5, image_antara_last + 4);

            var antara_object_news = '<a href="'+ xmlDoc.getElementsByTagName("link")[i].childNodes[0].nodeValue +'" target="_blank">'+
                                      '<div class="row">'+
                                        '<div class="col-md-4">'+
                                          '<img style="width: 100%; border-radius: 5px;" src="'+ image_antara_source +'">'+
                                        '</div>'+
                                        '<div class="col-md-8">'+
                                          '<p>'+ xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue +'</p>'+
                                        '</div>'+
                                      '</div>'+
                                    '</a><br>';
          }

          
          $("#antara_news_id").append(antara_object_news);
        }
      }
    };
    xmlhttp.open("GET", rss_antara, true);
    xmlhttp.send();


    //    SHIERPROJECT    //  
    var xmlhttpShierProject = new XMLHttpRequest();
    xmlhttpShierProject.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var xml = this;
        console.log(this);
        var x, i, xmlDoc, txt;
        xmlDoc = xml.responseXML;
        txt = "";
        for (i = 0; i< x.length; i++) {
          txt += x[i].childNodes[0].nodeValue + '<br>';
          var shierproject_object_news = '<div class="col-md-6">'+
                                          '<img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">'+
                                          '<p>'+ xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue +'</p>'+
                                        '</div>';
          $("#shierproject_id").append(shierproject_object_news);
          //alert(xmlDoc);
        }
      }
    };
    xmlhttpShierProject.open("GET", 'http://cms-shierproject.local/api-index-article', true);
    xmlhttpShierProject.withCredentials = true;
    xmlhttpShierProject.setRequestHeader("Content-Type", "application/json");
    xmlhttpShierProject.send({ 'request': "authentication token" });
    //xmlhttpRepublika.send();



    // $.ajax({
    //   url: 'https://www.voaindonesia.com/api/zggqre__oq', 
    //   success: function(result){
    //     for(var i = 1; i <= result.getElementsByTagName('title').length; i++){
    //       var data_xml = result.responseXML;

    //       parser = new DOMParser();
    //       xmlDoc = parser.parseFromString(result,"text/xml");
    //       console.log(result);
    //     }
    //   }
    // });
});

