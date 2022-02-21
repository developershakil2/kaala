import React from 'react';
import {Link} from 'react-router-dom'
const Footer = ()=>{
    return(
        <>
           <footer id="footer1">
              <div className="container m-auto row">
                    <div id="footer_left" className="col-12 col-md-6 col-lg-6 col-lg-6 col-xl-6">
                       <h3>Reach us</h3>
                       <p id="footer_links">
                     
                        <Link to="/team/team2">Reach Us</Link>
                        <a href="#">Join Us</a>
                        <a href="#">Help</a>
                       </p>



                        <a href="#" id="cola">Our Team {"&"} Family</a>
                    </div>
                    <div className="col-12 col-md-6 col-lg-6 col-lg-6 col-xl-6">
                        
                        </div>
                  </div>
            </footer>
        </>
    )
}

export default Footer;