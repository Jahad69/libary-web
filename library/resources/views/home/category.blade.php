<div class="categories-collections">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="categories">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>Browse Through Book <em>Categories</em> Here.</h2>
                </div>
              </div>

              @foreach($category as $category)
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="">
                    <img src="assets/images/book-cate1.avif" style="border-radius: 10%;" alt="">
                  </div>
                  <h4>{{$category->cat_title}}</h4>
                  
                </div>
              </div>
              @endforeach

              <!-- <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-02.png" alt="">
                  </div>
                  <h4>Money</h4>
                  
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-03.png" alt="">
                  </div>
                  <h4>Psychological</h4>
                  
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-04.png" alt="">
                  </div>
                  <h4>Story</h4>
                  
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-05.png" alt="">
                  </div>
                  <h4>Fictional</h4>
                  
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-06.png" alt="">
                  </div>
                  <h4>Romance</h4>
                  
                </div>
              </div> -->
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
