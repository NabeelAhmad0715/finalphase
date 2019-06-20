@extends('front_end.nav')

@extends('front_end.customPackages')


@section('content')

  <section>
      <div class="package">
          <div class="col-md-3 sidebar-wrap p-4 px-5">
            <h3 class="heading"> Find Packages </h3>
            <form>
                <div class="fields">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Destination, City" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Current Location" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control unstyled"  onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="Date from" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control unstyled"  onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="Date to" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">5000 > 9999</option>
                            <option value="">10000 > 14999</option>
                            <option value="">15000 > 19999</option>
                            <option value="">20000 > 24999</option>
                            <option value="">25000 ></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox"  value="5star" name="5star"   class="form-check-input">
                        <p class="rate1"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                         <input type="checkbox"  value="4star" name="4star" class="form-check-input">
                        <p class="rate1"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                        <input type="checkbox"  value="3star" name="3star" class="form-check-input">
                        <p class="rate1"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                        <input type="checkbox"  value="2star" name="2star" class="form-check-input">
                        <p class="rate1"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                        <input type="checkbox"  value="1star" name="1star" class="form-check-input">
                        <p class="rate1"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>

                    </div>
                    <div class="form-group">
                            <input type="submit"  class="form-control btn btn-primary" value="Search">
                    </div>
                    

                </div>
                
            </form>

            
            </div>
            
                @yield('Packages')
        
      </div>
  </section>
@endsection

