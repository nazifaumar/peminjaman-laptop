<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form</title>
    
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  </head>

  <body>
    <section class="container">
      <header>
        <a href="#" class="logo">Landing<span>Laptop</span></a>
    
        <ul class="navlist">
          <li><a href="/">Home</a></li>
          <li><a href="/form">Gtww</a></li>
        </ul>
    
        <div class="icons">
          <a href="#"><i class='bx bx-search-alt-2'></i></a>
        </div>
      </header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Purposes</label>
          <input type="text" placeholder="Enter purposes" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>NIS</label>
            <input type="number" placeholder="Enter nis number" required />
          </div>

          <div class="column">
            <div class="input-box">
              <label>Rayon</label>
              <input type="text" placeholder="Enter rayon" required />
            </div>
            
        <div class="teacher-box">
          <h3>Teacher</h3>
          <div class="teacher-option">
            <div class="teacher">
              <input type="radio" id="check-teacher" name="teacher" checked />
              <label for="check-other">Fema</label>
              <input type="radio" id="check-teacher" name="teacher" checked />
              <label for="check-other">David</label>
              <input type="radio" id="check-teacher" name="teacher" checked />
              <label for="check-other">Rio</label>
              <input type="radio" id="check-teacher" name="teacher" checked />
              <label for="check-other">Riska</label>
            </div>

        <div class="input-box rombel">
          <label>Rombel </label>
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>please select</option>
                <option>PPLG 1</option>
                <option>PPLG 2</option>
                <option>PPLG 3</option>
                <option>PPLG 4</option>
                <option>PPLG 5</option>
              </select>
            </div>
        <button class="btn submit">Submit</button>
    
      </form>
    </section>

  </body>
</html>

