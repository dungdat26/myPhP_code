import React from 'react';

const Blog = () => {
    
        return (
            <section id="blog">
        <div className="container">
          <div className="row">
            <div className="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
              <h2>Blog Posts</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
            </div>
          </div>
          <div className="blog-posts">
            <div className="row">
              <div className="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div className="post-thumb">
                  <a href="#"><img className="img-responsive" src="images/blog/1.jpg"  /></a> 
                  <div className="post-meta">
                    <span><i className="fa fa-comments-o" /> 3 Comments</span>
                    <span><i className="fa fa-heart" /> 0 Likes</span> 
                  </div>
                  <div className="post-icon">
                    <i className="fa fa-pencil" />
                  </div>
                </div>
                <div className="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span className="date">June 26, 2014</span>
                  <span className="cetagory">in <strong>Photography</strong></span>
                </div>
                <div className="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>
              <div className="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div className="post-thumb">
                  <div id="post-carousel" className="carousel slide" data-ride="carousel">
                    <ol className="carousel-indicators">
                      <li data-target="#post-carousel" data-slide-to={0} className="active" />
                      <li data-target="#post-carousel" data-slide-to={1} />
                      <li data-target="#post-carousel" data-slide-to={2} />
                    </ol>
                    <div className="carousel-inner">
                      <div className="item active">
                        <a href="#"><img className="img-responsive" src="images/blog/2.jpg"  /></a>
                      </div>
                      <div className="item">
                        <a href="#"><img className="img-responsive" src="images/blog/1.jpg"  /></a>
                      </div>
                      <div className="item">
                        <a href="#"><img className="img-responsive" src="images/blog/3.jpg"  /></a>
                      </div>
                    </div>                               
                    <a className="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i className="fa fa-angle-left" /></a>
                    <a className="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i className="fa fa-angle-right" /></a>
                  </div>                            
                  <div className="post-meta">
                    <span><i className="fa fa-comments-o" /> 3 Comments</span>
                    <span><i className="fa fa-heart" /> 0 Likes</span> 
                  </div>
                  <div className="post-icon">
                    <i className="fa fa-picture-o" />
                  </div>
                </div>
                <div className="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span className="date">June 26, 2014</span>
                  <span className="cetagory">in <strong>Photography</strong></span>
                </div>
                <div className="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>
              <div className="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                <div className="post-thumb">
                  <a href="#"><img className="img-responsive" src="images/blog/3.jpg" /></a>
                  <div className="post-meta">
                    <span><i className="fa fa-comments-o" /> 3 Comments</span>
                    <span><i className="fa fa-heart" /> 0 Likes</span> 
                  </div>
                  <div className="post-icon">
                    <i className="fa fa-video-camera" />
                  </div>
                </div>
                <div className="entry-header">
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
                  <span className="date">June 26, 2014</span>
                  <span className="cetagory">in <strong>Photography</strong></span>
                </div>
                <div className="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
              </div>                    
            </div>
            <div className="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
              <a href="#" className="btn-loadmore"><i className="fa fa-repeat" /> Load More</a>
            </div>                
          </div>
        </div>
      </section>
        );
    }


export default Blog;
