
<script src="/js/scripts/search.js" type="text/javascript"></script>

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a id="home_button" class="navbar-brand" href="/#">Home</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">

            <div class="form-inline my-2 my-lg-3">
              <form action="/create">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Create an Ad</button>
              </form>

              
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">

              <ul>
                <li>
                    <input id="company_name" type="checkbox" value="Name" />Company Name
                </li>

                <li>
                    <input id="programming_language" type="checkbox" value="Language" />Programming Language
                </li>

                <li>
                    <input id="keyword" type="checkbox" value="Keyword" />Keyword
                </li>
            </ul>
            </div>
          </li>

        </ul>

        <form class="form-inline my-2 my-lg-3">
          <input id="input_area" class="form-control mr-sm-2" type="text" placeholder="Search">

          <button id="search_button" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        
      </div>
    </nav>