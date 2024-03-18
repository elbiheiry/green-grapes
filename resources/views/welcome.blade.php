<!DOCTYPE html>
<html dir="rtl">

<head>
    <!-- Meta Tags
        ======================-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="" />

    <!-- Title Name
        ================================-->
    <title>Green graapes</title>

    <!-- Fave Icons
        ================================-->
    <link rel="shortcut icon" href="images/logo.svg" />

    <!-- Font
        ================================-->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,900" rel="stylesheet" />

    <!-- Css Base And Vendor
        ===================================-->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap-en.css" />
    <link rel="stylesheet" href="vendor/animation/animate.css" />

    <!-- Site Css
        ====================================-->
    <link rel="stylesheet" href="css/style.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="side-block">
        <div class="logo wow fadeInLeft">
            <img src="images/enab1.png" />
        </div>
        <div class="copy-right">جميع الحقوق محفوظة لأيتاد@2024</div>
    </div>
    <div class="side-block-cont">
        <div class="block-item row">
            <div class="head-title typeit"></div>
            <div class="info-text">عننا</div>
            <div>
                <div class="about-item">
                    <div class="about-info">
                        <span> من نحن :</span>
                        شـــركة سعودية %100 تقوم بتوفير المواد الغذائية الطازجة و اصناف
                        المطلوبة من أسواق الجملة و توصيلها لــــلجهات مقدمة خدمات التغذية
                        مثل (الفنادق / المطاعم / المستشـــفيات) و بهـــذا نكـــون حلقة وصل
                        فـــي تقديم الدعـــم اللوجســـتي و توصيلها لعملائنا بتلك الجهات
                    </div>
                    <!--End Contact Info-->
                </div>
                <!--End contact item-->
            </div>
            <div class="clearfix"></div>
            <div class="info-text">معلومات التواصل</div>
            <div class="col-md-12 col-sm-12">
                <div class="contact-item">
                    <img src="images/map.png" />
                    <div class="contact-info">
                        <span> العنوان :</span>
                        الرياض - حي الضباط، طريق صـلاح الدين ايوبي برج متون، الدور الثاني
                    </div>
                    <!--End Contact Info-->
                </div>
                <!--End contact item-->
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="contact-item">
                    <img src="images/phone.png" />
                    <div class="contact-info" dir="ltr">
                        <span dir="rtl"> الرقم :</span>
                        +9660501885299
                    </div>
                    <!--End Contact Info-->
                </div>
                <!--End contact item-->
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="contact-item">
                    <img src="images/contact.png" />
                    <div class="contact-info">
                        <span>البريد الالكتروني :</span>
                        info@greengrapes.com.sa
                    </div>
                    <!--End Contact Info-->
                </div>
                <!--End contact item-->
            </div>
            <div class="clearfix"></div>
            <div class="info-text">تواصل معنا</div>
            <form id="myForm" class="ajax-form" method="post" action="{{ route('send-mail') }}">
                @csrf
                @method('post')
                <div class="form-group">
                    <label>الاسم *</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group">
                    <label>الرقم *</label>
                    <input type="text" class="form-control" name="phone" />
                </div>
                <div class="form-group">
                    <label>البريد الالكتروني *</label>
                    <input type="email" class="form-control" name="email" />
                </div>
                <div class="form-group">
                    <label>الموضوع *</label>
                    <input type="text" class="form-control" name="subject" />
                </div>
                <div class="form-group">
                    <label>الرساله *</label>
                    <textarea class="form-control" name="message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="custom-btn"><span>ارسال</span></button>
                </div>
            </form>
            <a href="https://www.google.com/maps?q=%D9%85%D9%83%D8%AA%D8%A8+%D9%88%D9%84%D9%8A%D8%AF+%D8%A7%D9%84%D8%B4%D8%A8%D8%A7%D9%86%D8%A7%D8%AA+%D9%85%D8%AD%D8%A7%D8%B3%D8%A8%D9%88%D9%86+%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D9%88%D9%86%D8%8C+%D8%A7%D9%84%D8%A3%D9%8A%D9%88%D8%A8%D9%8A%D8%8C+8272+%D8%B7%D8%B1%D9%8A%D9%82+%D8%B5%D9%84%D8%A7%D8%AD+%D8%A7%D9%84%D8%AF%D9%8A%D9%86+%D8%A7%D9%84%D8%A3%D9%8A%D9%88%D8%A8%D9%8A%D8%8C+%D8%A7%D9%84%D8%B6%D8%A8%D8%A7%D8%B7%D8%8C+%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6+12623+4504+%D8%B7%D8%B1%D9%8A%D9%82+%D8%B5%D9%84%D8%A7%D8%AD+%D8%A7%D9%84%D8%AF%D9%8A%D9%86%D8%8C+%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6+12623&ftid=0x3e2f0475ee948443:0x10f5bed13c848479&hl=ar-SA&gl=sa&shorturl=1"
                target="_blank" class="custom-btn showMap"><span>اظهار الخريطه</span></a>
            <div class="clearfix"></div>
        </div>
        <!-- <div class="map">
          <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.4232202901935!2d31.21629431511527!3d30.053400981879058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840d8cb23ee19%3A0x287c1eaaec171248!2s1+El+Gabalaya+St%2C+Al+Gabalayah%2C+Zamalek%2C+Cairo+Governorate+11211!5e0!3m2!1sen!2seg!4v1552302519765"
          width="100%"
          height="450"
          frameborder="0"
          style="border: 0"
          allowfullscreen
        ></iframe>
      </div> -->
    </div>
    <div class="loader">
        <div class="load-cont">
            تحميل
            <div class="spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- JS Base And Vendor
        ==========================================-->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/bootstrap.js"></script>
    <script src="vendor/TypeIt/typeit.min.js"></script>
    <script src="vendor/animation/wow.min.js"></script>
    <script src="vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        wow = new WOW({
            animateClass: "animated",
            offset: 0,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
            },
        });
        wow.init();
        $(document).on('submit', '.ajax-form', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            form.find(":submit").attr('disabled', true).html('<span> برجاء الإنتظار ... </span>');

            $.ajax({

                url: url,
                method: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    notification("success", response, "fas fa-check");
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    notification("danger", response, "fas fa-times");
                    form.find(":submit").attr('disabled', false).html('<span> ارسال </span>');
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            return false;
        });
    </script>
</body>

</html>
