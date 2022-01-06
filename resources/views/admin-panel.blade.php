<x-header />
{{-- <div class="container text-container"> --}}
    {{-- <form action="/post">
        <div class="mb-3 row">
            <label for="title" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="title_ru" placeholder="title_ru">
            </div>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="title_en" placeholder="title_en">
            </div>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="title_kg" placeholder="title_kg">
            </div>
        </div>
        <div class="mb-3">
            text_en
            <label for="text_en" class="form-label"></label>
            <textarea class="form-control" name="text_en" placeholder="text_en" aria-describedby="fileHelpId">
          </textarea>
        </div>
        <div class="mb-3">
            text_kg
            <label for="text_kg" class="form-label"></label>
            <textarea class="form-control" name="text_kg" placeholder="text_kg" aria-describedby="fileHelpId">
          </textarea>
        </div>
        <div class="mb-3">
            text_ru
            <label for="text_ru" class="form-label"></label>
            <textarea class="form-control" name="text_kg" placeholder="text_kg" aria-describedby="fileHelpId">
          </textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name="send" class="btn btn-primary">Send</button>
        </div>
    </form>
</div>
<hr>
<div class="container">
    <table class="table table-striped table-responsive">
        <thead class="thead-inverse|thead-default">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>text</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($articles as $article)
            <tr>
                <td scope="row">{{$article['id']}}</td>
                <td>{{$article['title']}}</td>
                <td>{{$article['text']}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div> --}}
@isset($msg)
    {{$msg}}
@endisset
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Upload Photo
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form class="form-group" action='UploadPhoto' enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="title" placeholder="title of photography">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Photo description here:</label>
                        <div class="mb-3">
                          <label for="desc" class="form-label"></label>
                          <textarea class="form-control" name="description" id="desc" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Upload photo here:</label>
                        <input type="file" class="form-control form-control-lg" id="file" name='photo'>
                    </div>
                    <button type="submit" class="btn btn-primary" name="send">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Upload Video
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container">
                    <form action="UploadVideo" method="post" enctype="multipart/form-data" class="form-group">
                        @csrf
                        <div class="mb-3 row">
                            <label for="titleVideo" class="col-sm-1-12 col-form-label">title here</label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="title" id="titleVideo" placeholder="title here">
                            </div>
                        </div>
                        <fieldset class="mb-3 row">
                            <legend class="col-form-legend col-sm-1-12">data:</legend>
                            <div class="col-sm-1-12">
                                <div class="mb-3">
                                  <label for="video" class="form-label">Upload video here</label>
                                  <input type="file" class="form-control form-control-lg" name="video" id="video" aria-describedby="fileHelpId">
                                </div>
                                <div class="mb-3">
                                  <label for="description" class="form-label">description of video</label>
                                  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <div class="mb-3 row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Action</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer />
