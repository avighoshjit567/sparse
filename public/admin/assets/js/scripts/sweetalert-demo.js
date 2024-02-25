$(function(){
    $('#alert_1').click(function(){
        swal('Any fool can use a computer');
    });
    $('#alert_2').click(function(){
        swal("Here's the title!", "...and here's the text!")
    });

    $('#alert_3_1').click(function(){
        swal("Here's the title!", "...and here's the text!", "success");
    });
    $('#alert_3_2').click(function(){
        swal("Here's the title!", "...and here's the text!", "info");
    });
    $('#alert_3_3').click(function(){
        swal("Here's the title!", "...and here's the text!", "warning");
    });
    $('#alert_3_4').click(function(){
        swal("Here's the title!", "...and here's the text!", "error");
    });
    $('#alert_3_5').click(function(){
        swal("Here's the title!", "...and here's the text!", "question");
    });

    $('#alert_4').click(function(){
        swal({
            title: "Here's the title!", 
            text: "...and here's the text!",
            confirmButtonText: "I'm sure!",
            confirmButtonClass: "btn btn-primary",
            showCancelButton: !0,
            cancelButtonText: "No, Thanks",
        });
    });
    $('#alert_5').click(function(){
        swal({
            title: 'Your work has been saved',
            type: 'success',
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
        });
    });
    $('#alert_6').click(function(){
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            swal(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        });
    });
    $('#alert_7').click(function(){
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function(e) {
            e.value ? swal("Deleted!", "Your file has been deleted.", "success") : "cancel" === e.dismiss && swal("Cancelled", "Your imaginary file is safe :)", "error")
        })
    });
    $('#alert_8').click(function(){
        swal({
          title: 'Custom animation with Animate.css',
          animation: false,
          customClass: 'animated tada'
        });
    });
    $('#alert_9').click(function(){
        swal({
          title: 'Sweet!',
          text: 'Modal with a custom image.',
          imageUrl: 'https://unsplash.it/400/200',
          imageWidth: 400,
          imageHeight: 200,
          imageAlt: 'Custom image',
          animation: false
        });
    });
    $('#alert_10').click(function(){
        swal({
          title: 'Submit your Github username',
          input: 'text',
          inputAttributes: {
            autocapitalize: 'off'
          },
          showCancelButton: true,
          confirmButtonText: 'Look up',
          showLoaderOnConfirm: true,
          preConfirm: (login) => {
            return fetch(`//api.github.com/users/${login}`)
              .then(response => {
                if (!response.ok) {
                  throw new Error(response.statusText)
                }
                return response.json()
              })
              .catch(error => {
                swal.showValidationError(
                  `Request failed: ${error}`
                )
              })
          },
          allowOutsideClick: () => !swal.isLoading()
        }).then((result) => {
          if (result.value) {
            swal({
              title: `${result.value.login}'s avatar`,
              imageUrl: result.value.avatar_url
            })
          }
        })
    });
    $('#alert_11').click(function(){
        swal.mixin({
          input: 'text',
          confirmButtonText: 'Next &rarr;',
          showCancelButton: true,
          progressSteps: ['1', '2', '3']
        }).queue([
          {
            title: 'Question 1',
            text: 'Chaining swal2 modals is easy'
          },
          'Question 2',
          'Question 3'
        ]).then((result) => {
          if (result.value) {
            swal({
              title: 'All done!',
              html:
                'Your answers: <pre><code>' +
                  JSON.stringify(result.value) +
                '</code></pre>',
              confirmButtonText: 'Lovely!'
            })
          }
        });
    });
    $('#alert_12').click(function(){
        const ipAPI = 'https://api.ipify.org?format=json'

        swal.queue([{
          title: 'Your public IP',
          confirmButtonText: 'Show my public IP',
          text:
            'Your public IP will be received ' +
            'via AJAX request',
          showLoaderOnConfirm: true,
          preConfirm: () => {
            return fetch(ipAPI)
              .then(response => response.json())
              .then(data => swal.insertQueueStep(data.ip))
              .catch(() => {
                swal.insertQueueStep({
                  type: 'error',
                  title: 'Unable to get your public IP'
                })
              })
          }
        }]);
    });
    $('#alert_13').click(function(){
        swal({
          title: 'هل تريد الاستمرار؟',
          confirmButtonText:  'نعم',
          cancelButtonText:  'لا',
          showCancelButton: true,
          showCloseButton: true,
          target: document.getElementById('rtl-container'),
        });
    });
});
