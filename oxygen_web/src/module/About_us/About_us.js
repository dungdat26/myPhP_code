import React from 'react';

const About_us = () =>  {
    
        return (
            <section id="about-us" className="parallax">
            <div className="container">
              <div className="row">
                <div className="col-sm-6">
                  <div className="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>About us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div className="col-sm-6">
                  <div className="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div className="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <p className="lead">User Experiances</p>
                      <div className="progress">
                        <div className="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" >95%</div>
                      </div>
                    </div>
                    <div className="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                      <p className="lead">Web Design</p>
                      <div className="progress">
                        <div className="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  >75%</div>
                      </div>
                    </div>
                    <div className="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                      <p className="lead">Programming</p>
                      <div className="progress">
                        <div className="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  >60%</div>
                      </div>
                    </div>
                    <div className="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                      <p className="lead">Fun</p>
                      <div className="progress">
                        <div className="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  >85%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        );
    }


export default About_us;
