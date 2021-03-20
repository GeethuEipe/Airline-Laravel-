<!DOCTYPE html>
<html>
<head>
<title>Airline </title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<link rel="stylesheet" href="../css/style.css">
<style>
    
    </style>
</head>
<section class="search-sec py bgblack">
    <div class="container">
            <div class="row">
                <form action="searchflight" method="get" novalidate="novalidate">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 mt-2">
                            <input type="date" class="form-control search-slt" placeholder="Enter your date" name="departuredate">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 mt-2">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="departureairport">
                              <option>FROM</option>
                                <option>TRIVANDRUM</option>
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGLOUR</option>
                                <option>CHENNAI</option>
                                <option>GOA</option>
                                <option>PUNE</option>
                                <option>JAIPUR</option>
                                <option>COIMBATOR</option>
                                <option>VISHAKAPATTANAM</option>
                                <option>AGRA</option>

                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 mt-2">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="arrivalairport">
                                <option>TO</option>
                                
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGLOUR</option>
                                <option>CHENNAI</option>
                                <option>GOA</option>
                                <option>PUNE</option>
                                <option>JAIPUR</option>
                                <option>COIMBATOR</option>
                                <option>VISHAKAPATTANAM</option>
                                <option>AGRA</option>
                                <option>TRIVANDRUM</option>
        
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                          <button class="btn btn-primary wrn-btn px-5"
                          type="submit" value="search" name="submit">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>
</div>
</div>
</div>
</section> 


</body>
</html>
