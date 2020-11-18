import React, { Component } from 'react';

class Pricing extends Component {
    render() {
        return (
            <section id="pricing">
        <div className="container">
          <div className="row">
            <div className="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
              <h2>Pricing Table</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
            </div>
          </div>
          <div className="pricing-table">
            <div className="row">
              <div className="col-sm-3">
                <div className="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <h3>Basic</h3>
                  <div className="price">
                    $9<span>/Month</span>                          
                  </div>
                  <ul>
                    <li>Free Setup</li>
                    <li>10GB Storage</li>
                    <li>100GB Bandwith</li>
                    <li>5 Products</li>
                  </ul>
                  <a href="#" className="btn btn-lg btn-primary">Sign up</a>
                </div>
              </div>
              <div className="col-sm-3">
                <div className="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <h3>Standard</h3>
                  <div className="price">
                    $19<span>/Month</span>                                
                  </div>
                  <ul>
                    <li>Free Setup</li>
                    <li>10GB Storage</li>
                    <li>100GB Bandwith</li>
                    <li>5 Products</li>
                  </ul>
                  <a href="#" className="btn btn-lg btn-primary">Sign up</a>
                </div>
              </div>
              <div className="col-sm-3">
                <div className="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                  <h3>Featured</h3>
                  <div className="price">
                    $29<span>/Month</span>                                
                  </div>
                  <ul>
                    <li>Free Setup</li>
                    <li>10GB Storage</li>
                    <li>100GB Bandwith</li>
                    <li>5 Products</li>
                  </ul>
                  <a href="#" className="btn btn-lg btn-primary">Sign up</a>
                </div>
              </div>
              <div className="col-sm-3">
                <div className="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                  <h3>Professional</h3>
                  <div className="price">
                    $49<span>/Month</span>                    
                  </div>
                  <ul>
                    <li>Free Setup</li>
                    <li>10GB Storage</li>
                    <li>100GB Bandwith</li>
                    <li>5 Products</li>
                  </ul>
                  <a href="#" className="btn btn-lg btn-primary">Sign up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        );
    }
}

export default Pricing;
