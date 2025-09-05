<section id="contact" class="contact section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Contato</h2>
    <p>Informações para contato</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-5">

        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Endereço</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Telefone</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email</h3>
              <p>info@example.com</p>
            </div>
          </div>

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
            frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="col-lg-7">
        <form id="fake-form" action="{{ route('form-contact') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            @csrf
          <div class="row gy-4">

            <div class="col-md-6">
              <label for="name-field" class="pb-2">Seu nome</label>
              <input type="text" name="name" id="name-field" class="form-control" required="">
            </div>

            <div class="col-md-6">
              <label for="email-field" class="pb-2">Seu e-mail</label>
              <input type="email" class="form-control" name="email" id="email-field" required="">
            </div>

            <div class="col-md-12">
              <label for="subject-field" class="pb-2">Assunto</label>
              <input type="text" class="form-control" name="subject" id="subject-field" required="">
            </div>

            <div class="col-md-12">
              <label for="message-field" class="pb-2">Mensagem</label>
              <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Carregando</div>
              <div class="error-message">"Mensagem não enviada"</div>
                @if(session('success'))
                <div class="sent-message">{{ session('success') }}</div>
                @endif
              <button type="submit">Send Message</button>
              {{-- <script>
                document.getElementById('fake-form').addEventListener('submit', function (e) {
                  e.preventDefault(); //

                  const loading = this.querySelector('.loading');
                  const sent = this.querySelector('.sent-message');
                  const error = this.querySelector('.error-message');

                  loading.style.display = 'block';
                  sent.style.display = 'none';
                  error.style.display = 'none';

                  // simula um tempo de processamento
                  setTimeout(() => {
                    loading.style.display = 'none';
                    sent.style.display = 'block';

                    this.reset(); // limpa o formulário
                  }, 1000);
                });
              </script> --}}
            </div>

          </div>
        </form>
      </div>

    </div>

  </div>

</section>