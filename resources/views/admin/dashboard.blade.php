@extends('admin.layouts.master')
@section('content')
<div class="bpv" id="app-growl"></div>



<div class="cd fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="bqx" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="d">
        <h5 class="modal-title">Messages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body agv js-modalBody">
        <div class="azd">
          <div class="bqe cj ca js-msgGroup">
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-fat.jpg">
                <div class="tv">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="bqo">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-mdo.png">
                <div class="tv">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="bqo">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-dhg.png">
                <div class="tv">
                  <strong>Dave Gamache</strong>
                  <div class="bqo">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-fat.jpg">
                <div class="tv">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="bqo">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-mdo.png">
                <div class="tv">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="bqo">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-dhg.png">
                <div class="tv">
                  <strong>Dave Gamache</strong>
                  <div class="bqo">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-fat.jpg">
                <div class="tv">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="bqo">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-mdo.png">
                <div class="tv">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="bqo">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b tw">
              <div class="tu">
                <img class="wg bqa wp yy agc" src="../images/avatar-dhg.png">
                <div class="tv">
                  <strong>Dave Gamache</strong>
                  <div class="bqo">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="hidden-xs-up aga js-conversation">
            <ul class="bqe bqk">
              <li class="tu bqn agk">
                <div class="tv">
                  <div class="bql">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="bqm">
                    <small class="axr">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <img class="wg bqa wp yy agc" src="../images/avatar-dhg.png">
              </li>

              <li class="tu agk">
                <img class="wg bqa wp yy agc" src="../images/avatar-fat.jpg">
                <div class="tv">
                  <div class="bql">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="bql">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="bql">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="bqm">
                    <small class="axr">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="tu agk">
                <img class="wg bqa wp yy agc" src="../images/avatar-mdo.png">
                <div class="tv">
                  <div class="bql">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="bql">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="bqm">
                    <small class="axr">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="tu bqn agk">
                <div class="tv">
                  <div class="bql">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="bqm">
                    <small class="axr">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <img class="wg bqa wp yy agc" src="images/avatar-dhg.png">
              </li>

              <li class="tu agk">
                <img class="wg bqa wp yy agc" src="images/avatar-fat.jpg">
                <div class="tv">
                  <div class="bql">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="bql">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="bql">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="bqm">
                    <small class="axr">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="tu agk">
                <img class="wg bqa wp yy agc" src="images/avatar-mdo.png">
                <div class="tv">
                  <div class="bql">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="bql">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="bqm">
                    <small class="axr">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="cd fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="bqy" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="d">
        <h4 class="modal-title">Users</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body agv">
        <div class="azd">
          <ul class="bqe cj ca">
            <li class="b">
              <div class="tu aey">
                <img class="bqa wp yy agc" src="images/avatar-fat.jpg">
                <div class="tv">
                  <button class="cg pl pz aec">
                    <span class="c bqz"></span> Follow
                  </button>
                  <strong>Jacob Thornton</strong>
                  <p>@fat - San Francisco</p>
                </div>
              </div>
            </li>
            <li class="b">
              <div class="tu aey">
                <img class="bqa wp yy agc" src="images/avatar-dhg.png">
                <div class="tv">
                  <button class="cg pl pz aec">
                    <span class="c bqz"></span> Follow
                  </button>
                  <strong>Dave Gamache</strong>
                  <p>@dhg - Palo Alto</p>
                </div>
              </div>
            </li>
            <li class="b">
              <div class="tu aey">
                <img class="bqa wp yy agc" src="images/avatar-mdo.png">
                <div class="tv">
                  <button class="cg pl pz aec">
                    <span class="c bqz"></span> Follow
                  </button>
                  <strong>Mark Otto</strong>
                  <p>@mdo - San Francisco</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="by ahy">
  <div class="dq">
    <div class="fh">
      <div class="rp bqq agk">
        <div class="rv" style="background-image: url(images/iceland.jpg);"></div>
        <div class="rq awx">
          <a href="profile/index.html">
            <img
              class="bqr"
              src="images/avatar-dhg.png">
          </a>

          <h6 class="rr">
            <a class="bph" href="profile/index.html">Dave Gamache</a>
          </h6>

          <p class="agk">I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.</p>

          <ul class="bqs">
            <li class="bqt">
              <a href="#userModal" class="bph" data-toggle="modal">
                Friends
                <h6 class="afl">12M</h6>
              </a>
            </li>

            <li class="bqt">
              <a href="#userModal" class="bph" data-toggle="modal">
                Enemies
                <h6 class="afl">1</h6>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="rp bra brb agk">
        <div class="rq">
          <h6 class="agd">About <small>· <a href="#">Edit</a></small></h6>
          <ul class="dc ayn">
            <li><span class="axr h bbu agc"></span>Went to <a href="#">Oh, Canada</a>
            <li><span class="axr h boj agc"></span>Became friends with <a href="#">Obama</a>
            <li><span class="axr h bgh agc"></span>Worked at <a href="#">Github</a>
            <li><span class="axr h bgx agc"></span>Lives in <a href="#">San Francisco, CA</a>
            <li><span class="axr h big agc"></span>From <a href="#">Seattle, WA</a>
          </ul>
        </div>
      </div>

       <div class="rp bra brb">
        <div class="rq">
          <h6 class="agd">Photos <small>· <a href="#">Edit</a></small></h6>
          <div data-grid="images" data-target-height="150">
            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="images/instagram_5.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="images/instagram_5.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="images/instagram_5.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="images/instagram_5.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="images/instagram_5.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="images/instagram_50.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fk">

      <ul class="ca bqe bqf agk">

        <li class="tu b ahx">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Message">
            <div class="om">
              <button type="button" class="cg pl">
                <span class="h bbv"></span>
              </button>
            </div>
          </div>
        </li>

        <li class="tu b ahx">
          <img
            class="bqa wp yy agc"
            src="images/avatar-dhg.png">
          <div class="tv">
            <div class="bqj">
              <small class="aec axr">4 min</small>
              <h6>Dave Gamache</h6>
            </div>

            <p>
              Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>

            <div class="bqg" data-grid="images">
              <div style="display: none">
                <img data-action="zoom" data-width="1050" data-height="700" src="images/unsplash_1.jpg">
              </div>

              <div style="display: none">
                <img data-action="zoom" data-width="640" data-height="640" src="images/instagram_5.jpg">
              </div>

              <div style="display: none">
                <img data-action="zoom" data-width="640" data-height="640" src="images/instagram_53.jpg">
              </div>

              <div style="display: none">
                <img data-action="zoom" data-width="1048" data-height="700" src="images/unsplash_2.jpg">
              </div>
            </div>

            <ul class="bqe afw">
              <li class="tu agd">
                <img
                  class="bqa wp yy agc"
                  src="images/avatar-fat.jpg">
                <div class="tv">
                  <strong>Jacon Thornton: </strong>
                  Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                </div>
              </li>
              <li class="tu">
                <img
                  class="bqa wp yy agc"
                  src="images/avatar-mdo.png">
                <div class="tv">
                  <strong>Mark Otto: </strong>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </div>
              </li>
            </ul>
          </div>
        </li>

        <li class="tu b ahx">
          <img
            class="bqa wp yy agc"
            src="images/avatar-fat.jpg">
          <div class="tv">
            <div class="bql">
              <div class="bqj">
                <small class="aec axr">12 min</small>
                <h6>Jacob Thornton</h6>
              </div>
              <p>
                Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </li>

        <li class="tu b ahx">
          <img
            class="bqa wp yy agc"
            src="images/avatar-mdo.png">
          <div class="tv">
            <div class="bqj">
              <small class="aec axr">34 min</small>
              <h6>Mark Otto</h6>
            </div>

            <p>
              Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>

            <div class="bqg" data-grid="images">
              <img style="display: none" data-width="640" data-height="640" data-action="zoom" src="images/instagram_5.jpg">
            </div>

            <ul class="bqe">
              <li class="tu">
                <img
                  class="bqa wp yy agc"
                  src="images/avatar-dhg.png">
                <div class="tv">
                  <strong>Dave Gamache: </strong>
                  Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                </div>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="fh">
      <div class="alert to alert-dismissible aye" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <a class="tl" href="profile/index.html">Visit your profile!</a> Check your self, you aren't looking well.
      </div>

      <div class="rp agk aye">
        <div class="rq">
          <h6 class="agd">Sponsored</h6>
          <div data-grid="images" data-target-height="150">
            <img class="bqa" data-width="640" data-height="640" data-action="zoom" src="images/instagram_5.jpg">
          </div>
          <p><strong>It might be time to visit Iceland.</strong> Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice. What are you waiting for?</p>
          <button class="cg pq pz">Buy a ticket</button>
        </div>
      </div>

      <div class="rp agk aye">
        <div class="rq">
        <h6 class="agd">Likes <small>· <a href="#">View All</a></small></h6>
        <ul class="bqe bqf">
          <li class="tu afw">
            <img
              class="bqa wp yy agc"
              src="images/avatar-fat.jpg">
            <div class="tv">
              <strong>Jacob Thornton</strong> @fat
              <div class="bqi">
                <button class="cg pq pz">
                  <span class="h azp"></span> Follow</button>
              </div>
            </div>
          </li>
           <li class="tu">
            <a class="brc" href="#">
              <img
                class="bqa wp yy agc"
                src="images/avatar-mdo.png">
            </a>
            <div class="tv">
              <strong>Mark Otto</strong> @mdo
              <div class="bqi">
                <button class="cg pq pz">
                  <span class="h azp"></span> Follow</button></button>
              </div>
            </div>
          </li>
        </ul>
        </div>
        <div class="rw">
          Dave really likes these nerds, no one knows why though.
        </div>
      </div>

      <div class="rp bqu">
        <div class="rq">
          © 2015 Bootstrap
          <a href="#">About</a>
          <a href="#">Help</a>
          <a href="#">Terms</a>
          <a href="#">Privacy</a>
          <a href="#">Cookies</a>
          <a href="#">Ads </a>
          <a href="#">Info</a>
          <a href="#">Brand</a>
          <a href="#">Blog</a>
          <a href="#">Status</a>
          <a href="#">Apps</a>
          <a href="#">Jobs</a>
          <a href="#">Advertise</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
