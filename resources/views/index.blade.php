<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="/index.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Laravel-News</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">ホーム <span class="sr-only">(現位置)</span></a>
          <a class="nav-item nav-link" href="#">リンク1</a>
          <a class="nav-item nav-link" href="#">リンク2</a>
          <a class="nav-link disabled" href="#"> tabindex="-1" aria-disabled="true"無効</a>
        </div>
      </div>
    </nav>
    <main class='container pt-5'>
        <!-- タブ部分 -->
        <ul id="myTab" class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a href="#home" id="home-tab" class="nav-link active" role="tab" data-toggle="tab" aria-controls="home" aria-selected="true">ホーム</a>
          </li>
          <li class="nav-item">
            <a href="#business" id="business-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="profile" aria-selected="false">ビジネス</a>
          </li>
          <li class="nav-item">
            <a href="#entertainment" id="entertainment-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="contact" aria-selected="false">エンタメ</a>
          </li>
          <li class="nav-item">
            <a href="#sports" id="sports-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="contact" aria-selected="false">スポーツ</a>
          </li>
        </ul>

        <!-- パネル部分 -->
        <div id="myTabContent" class="tab-content mt-3">
          <div id="home" class="tab-pane active" role="tabpanel" aria-labelledby="home-tab">
            <div class='row'>
    @foreach($articles AS $article)
              <div class="col-md-3 card">
                <img class="card-img-top" src="{{ $article['urlToImage'] }}" alt="カードの画像">
                <div class="card-body">
                  <h5 class="card-title">{{ $article['title'] }}</h5>
                  <a href="{{ $article['url'] }}" class="btn btn-primary" target="blank">ニュースの詳細</a>
                </div>
              </div>
    @endforeach
            </div>
          </div>
          <div id="business" class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
            <div class='row'>
    @foreach($business_articles AS $article)
              <div class="col-md-3 card">
                <img class="card-img-top" src="{{ $article['urlToImage'] }}" alt="カードの画像">
                <div class="card-body">
                  <h5 class="card-title">{{ $article['title'] }}</h5>
                  <a href="{{ $article['url'] }}" class="btn btn-primary" target="blank">ニュースの詳細</a>
                </div>
              </div>
    @endforeach
            </div>
          </div>
          <div id="entertainment" class="tab-pane" role="tabpanel" aria-labelledby="contact-tab">コンタクトの文章です。...</div>
          <div id="sports" class="tab-pane" role="tabpanel" aria-labelledby="contact-tab">コンタクトの文章です。...</div>
        </div>
    </main>
  </body>
</html>
