    $(function(){

        // banner轮播
        var banner = new Swiper ('.banner-box', {
            direction: 'horizontal', // 垂直切换选项
            loop: true, // 循环模式选项
            autoplay: {
              disableOnInteraction: false,
              delay: 3000,
            },
            // 如果需要分页器
            pagination: {
              el: '.swiper-pagination',
            },
            
        })    

        // 产品列表轮播
        var cplistr = new Swiper ('.cp-list', {
            direction: 'horizontal', // 垂直切换选项
            loop: true, // 循环模式选项
            autoplay: {
              disableOnInteraction: false,
              delay: 3000,
            },
            slidesPerView : 5,  
            spaceBetween : 20,
            // 如果需要分页器
        }) 


        // var caseSwiper = new Swiper('.case-swiper', {
        //     watchSlidesProgress: true,
        //     slidesPerView: 'auto',
        //     centeredSlides: true,
        //     loop: true,
        //     loopedSlides: 3,
        //     autoplay: true,
        //     on: {
        //         progress: function(progress) {
        //             for (i = 0; i < this.slides.length; i++) {
        //                 var slide = this.slides.eq(i);
        //                 var slideProgress = this.slides[i].progress;
        //                 modify = 1;
        //                 if (Math.abs(slideProgress) > 1) {
        //                     modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
        //                 }
        //                 translate = slideProgress * modify * 260 + 'px';
        //                 scale = 1 - Math.abs(slideProgress) / 5;
        //                 zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
        //                 slide.transform('translateX(' + translate + ') scale(' + scale + ')');
        //                 slide.css('zIndex', zIndex);
        //                 slide.css('opacity', 1);
        //                 if (Math.abs(slideProgress) > 3) {
        //                     slide.css('opacity', 0);
        //                 }
        //             }
        //         },
        //         setTransition: function(transition) {
        //             for (var i = 0; i < this.slides.length; i++) {
        //                 var slide = this.slides.eq(i)
        //                 slide.transition(transition);
        //             }
        
        //         }
        //     }
        
        // })


        // 行业案例轮播
        var caseSwiper = new Swiper ('.case-swiper', {
            direction: 'horizontal', // 垂直切换选项
            loop: true, // 循环模式选项
            autoplay: {
              disableOnInteraction: false,
              delay: 3000,
            },
            effect : 'coverflow',
            slidesPerView: 2,
            centeredSlides: true,
            coverflowEffect: {
              rotate: 0,
              stretch: 10,
              depth: 560,
            //   modifier: 2,
              slideShadows : true
            },
            
        }) 


        //新闻轮播
        var qa = new Swiper ('.qa-swiper', {
          direction: 'horizontal', // 垂直切换选项
          loop: true, // 循环模式选项
          // 如果需要分页器
          pagination: {
            el: '.swiper-pagination',
          },
          autoplay: {
            disableOnInteraction: false,
            delay: 3000,
          },

      }) 



      var ckkbdq = $('.ckcb-dq-ul >li');
      ckkbdq.hover(function(){
        $(this).addClass('ckkb-active');
      },function(){
        $(this).removeClass('ckkb-active');
      })


      // 产品显示按钮部分
      var cplunbo = $('.cp-list .swiper-slide');
      cplunbo.hover(function(){

        $(this).addClass('cp-shadow');
        $(this).find("p").eq(1).hide();
        // console.log($(this))
        $(this).find('a').css('display','block')

      },function(){
        $(this).removeClass('cp-shadow')
        $(this).find("p").eq(1).show();
        // console.log($(this))
        $(this).find('a').hide()
      })


      // 行业tab切换部分

      var casetab = $('.case-tab > ul >li');
      var caseitem = $('.case-item > .item-box');
      // console.log(casetab , caseitem)

      $.each(casetab, function (indexInArray, valueOfElement) { 
          
        $(this).click(function(){

          casetab.eq(indexInArray).addClass('case-active').siblings().removeClass('case-active');
          caseitem.eq(indexInArray).addClass('case-show').siblings().removeClass('case-show');

        });

      });


      // 问答tab切换

      var qatab = $('.qa-box > ul >li');
      var qaitem = $('.qa-item > div');
      console.log(qatab , qaitem)

      $.each(qatab, function (indexInArray1, valueOfElement1) { 
          
        $(this).click(function(){

          qatab.eq(indexInArray1).addClass('qa-active').siblings().removeClass('qa-active');
          qaitem.eq(indexInArray1).addClass('qa-show').siblings().removeClass('qa-show');

        });

      });

      // 问答移入效果

      var qalist = $('.qa-list >li');

      qalist.hover(function(){
        $(this).addClass('qa-list-active');
      },function(){
        $(this).removeClass('qa-list-active');
      });


      // 回到顶部

      var gotop = $('.gotop');
      $(window).scroll(()=>{
        // console.log($(window).scrollTop())

        if ($(window).scrollTop()>800) {
          gotop.fadeIn()
        } else {
          gotop.fadeOut()
          
        }

      })
      gotop.click(()=>{
        $('html').animate({'scrollTop':0},1000)
      })




    })