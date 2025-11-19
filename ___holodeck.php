        <!-- Call to action-->
        <section class="page-section-holodeck bg-light text-white" id="holodeck">
            <div class="container-fluid px-4 px-lg-5 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h1 class="mb-4"><strong>The Holodeck</strong></h1>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-8 text-center">
                        <p>Teleport to a private video space by entering an alphanumeric room name below. Join the space and then share the link with a friend.</p>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-5 col-sm-8 text-center">
                        <form id="holodeck-form">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Room Name</span>
                                </div>
                                <input id="holodeck-space" type="text" class="form-control" placeholder="i.e., Pick 6" aria-label="Username" aria-describedby="basic-addon1" required pattern="[a-zA-Z0-9 ]+">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" onclick="goToSpace();">Let's Go!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script>
          // Small helper to generate a GUID/UUID
          function generateGuid() {
            if (window.crypto && window.crypto.randomUUID) {
              return window.crypto.randomUUID();
            }
            // Fallback: not a perfect RFC UUID, but random enough for our use
            const hex = () => Math.floor((1 + Math.random()) * 0x10000)
              .toString(16)
              .substring(1);
            return (
              hex() + hex() + "-" +
              hex() + "-" +
              hex() + "-" +
              hex() + "-" +
              hex() + hex() + hex()
            );
          }

          function goToSpace() {
            var form = document.getElementById("holodeck-form");
            var isValid = form.checkValidity();

            if (!isValid) {
              form.reportValidity();
              return;
            }

            var space = $("#holodeck-space").val().trim();

            if (space) {
              var guid = generateGuid();
              // room = human label, id = secret key for Jitsi
              var url = "holodeck-video.php?room=" + encodeURIComponent(space) +
                        "&id=" + encodeURIComponent(guid);
              window.location.href = url;
            }
          }

          // A $( document ).ready() block.
          $(document).ready(function () {
            $("#holodeck-space").keypress(function (e) {
              if (e.which == 13) {
                e.preventDefault();
                goToSpace();
              }
            });
          });
        </script>
