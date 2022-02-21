import React from 'react';
import TwitterIcon from '@mui/icons-material/Twitter';
import {Link} from 'react-router-dom'
const Footer = ()=>{
    return(
        <>
           <footer className="fot" style={{overflow:'hidden', paddingTop:'10px', paddingBottom:'60px'}}  id="footer1">
              <div className="container m-auto row">
                    <div id="footer_left" className="col-12 col-md-6 col-lg-6 col-lg-6 col-xl-6">
                       <h3 style={{color:'#dc07e0'}}>interested to know more</h3>
                       <p id="footer_links">
                       <Link to="team/team2">Reach Us</Link>
                        <a href="#">Join Us</a>
                        <a href="#">Help</a>
                       </p>



                        <a href="#" id="cola">Our Team {"&"} Family</a>
                    </div>
                    <div style={{ marginTop:"10px ", textAlign:'center'}} className="col-12 col-md-6 col-lg-6 col-lg-6 col-xl-6">
                     
                        <a href="https://twitter.com/MovvaShivakumar"><TwitterIcon style={{fontSize:'30px'}}/></a>
                        </div>
                  </div>
            </footer>
        </>
    )
}

export default Footer;