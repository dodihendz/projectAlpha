post::create([
"category_id" => 1,
"title" => "Judul Pertama",
"slug" => "judul-pertama1",
"excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem, quod, quia voluptas quos voluptates quibusdam voluptatem voluptatibus quas voluptatum",
"body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, nostrum iusto? Cupiditate ipsa ducimus reprehenderit sunt itaque, quod maxime fugit quidem quasi beatae optio exercitationem rerum, ex aliquam cumque velit</p>"])

post::create([
"title" => "Judul Kedua",
"category_id" => 2,
"slug" => "judul-kedua2",
"excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam",
"body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, nostrum iusto? Cupiditate ipsa ducimus reprehenderit sunt itaque, quod maxime fugit quidem quasi beatae optio exercitationem rerum, ex aliquam cumque velit
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, eligendi, iste provident minus deserunt maxime omnis numquam non autem officiis similique repudiandae! Sint velit veniam vero illo, nobis repudiandae magni.</p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque blanditiis ducimus, dolorum, nesciunt quod soluta adipisci nobis ut quia optio error laboriosam rem eum sed quidem aspernatur dolores consequuntur dicta</p>"])

post::create([
"title" => "Judul keTiga",
"category_id" => 3,
"slug" => "judul-ketiga3",
"excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicingm",
"body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, nostrum iusto? Cupiditate ipsa ducimus reprehenderit sunt itaque, quod maxime fugit quidem quasi beatae optio exercitationem rerum, ex aliquam cumque velit
<p>Lorem ipsum dolor iste provident minus deserunt maxime omnis numquam non autem officiis similique repudiandae! Sint velit veniam vero illo, nobis repudiandae magni.</p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque blanditiis ducimus, dolorum, nesciunt quod soluta adipisci nobis ut quia optio error laboriosam rem eum sed quidem aspernatur dolores consequuntur dicta</p>"])

post::create([
"title" => "Judul KeEmpat",
"category_id" => 1,
"slug" => "judul-kempat4",
"excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicingm",
"body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicin()()()(). Tempora, nostrum iusto? Cupiditate ipsa ducimus reprehenderit sunt itaque, quod maxime fugit quidem quasi beatae optio exercitationem rerum, ex aliquam cumque velit
<p>Lorem ipsum dolor iste provident minus deserunt maxime omnis numquam non autem officiis similique repudiandae! Sint velit veniam vero illo, nobis repudiandae magni.</p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque blanditiis ducimus, dolorum, nesciunt quod soluta adipisci nobis ut quia optio error laboriosam rem eum sed quidem aspernatur dolores consequuntur dicta</p>"])


Category::create([
"name"=>"web-programming",
"slug"=>"web-01"])

Category::create([
"name" => "Design",
"slug" => "des-02"])

Category::create([
"name" => "Drawing",
"slug" => "draw-03"])