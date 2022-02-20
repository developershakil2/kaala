import React from 'react';

const Footer = ()=>{
    return(
        <>
           <footer className="fot" style={{overflow:'hidden', paddingTop:'10px', paddingBottom:'60px'}}  id="footer1">
              <div className="container m-auto row">
                    <div id="footer_left" className="col-12 col-md-6 col-lg-6 col-lg-6 col-xl-6">
                       <h3 style={{color:'purple'}}>interested to know more</h3>
                       <p id="footer_links">
                        <a href="#">Reach Us</a>
                        <a href="#">Join Us</a>
                        <a href="#">Like And Share</a>
                        <a href="#">Help</a>
                       </p>



                        <a href="#" id="cola">Our Team {"&"} Family</a>
                    </div>
                    <div style={{ height:"300px;"}} className="col-12 col-md-6 col-lg-6 col-lg-6 col-xl-6">
                    <a style={{height:'300px',overflowY:'scroll'}} class="twitter-timeline" href="https://twitter.com/MovvaShivakumar?ref_src=twsrc%5Etfw">Loading</a>
                        </div>
                  </div>
            </footer>
        </>
    )
}

export default Footer;