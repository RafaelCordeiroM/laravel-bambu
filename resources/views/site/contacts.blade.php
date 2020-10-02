@extends('site.components.layout')
@section('content')
<!--Google Map-->
<section class="section">
    <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxQWqS84zWpMRLyfWbCN0Na8&key=AIzaSyAhL911PIt76qfjU5xuB8wRRxyIvfVfmxo" allowfullscreen></iframe>
</section>
<!-- Why exterior design is important-->
<section class="bottom">
    <div class="container">
        <div class="row row-md-justify">
            <div class="col-md-6 bg-secondary-var-3 inset-3">
                <h2>Contate agente</h2>
                <!-- RD Mailform-->
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_58440/bat/rd-mailform.php">
                    <div class="row row-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-name">Nome:</label>
                                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-email">Email:</label>
                                <input class="form-input" id="contact-email" type="text" name="email" data-constraints="@Required @Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-tel">Telefone (whatsapp recomendado):</label>
                                <input class="form-input" id="contact-tel" type="tel" name="email" data-constraints="@Required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message">Escreva sua mensagem: Dúvidas, Sugestões, Formas de pagamento, Preço, Formas de entrega...</label>
                                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-md btn-secondary btn-no-arrow" type="submit">Enviar</button>
                </form>
            </div>
            <div class="col-md-4 well-sm">
                <h2>Address</h2>
                <p>
                    Email us with any questions or inquiries or use our contact data. We would be happy to answer your questions.
                </p>
                <address>
                28 Jackson Blvd Ste 1020, Chicago
                IL 60604-2340
              </address>
                <div class="contact-info">
                    <dl>
                        <dt>Freephone</dt>
                        <dd><a href="tel:#">+1 800 559 6580</a></dd>
                    </dl>
                    <dl>
                        <dt>Telephone</dt>
                        <dd><a href="tel:#">+1 800 603 6035</a></dd>
                    </dl>
                    <dl>
                        <dt>FAX</dt>
                        <dd><a href="tel:#">+1 800 889 9898</a></dd>
                    </dl>E-mail:<a class="mail" href="mailto:#"> mail@demolink.org</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection