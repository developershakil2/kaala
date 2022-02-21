
import React, {useEffect} from 'react';
import 'aos/dist/aos.css';
import AOS  from 'aos';
const Four = () =>{

    useEffect(()=>{
        AOS.init({duration: 2000})
    },[])
    return(
        <>
         <section id="four">
              <div data-aos="flip-down" className="container m-auto row">
                    <div className="col-12 col-md-8 col-lg-8 col-xl-8 m-auto">
                             <h3 style={{position:'relative', color:'#dc07e0'}}>The Time and Space Advantage</h3>
                             <span id="wt2"></span>
                            <div className="texi_content">
                            <p className="text-center">
                                <p>
                                Leverage technology towards end to end Product visibility, efficiency and interoperability
                             to make relevant information accessible to All chain stakeholders. </p>

                             <p className="mt-5">

                             A goal towards fostering global sustainable Innovative Practices within Business , Trade and Human Lifestyle
                             </p>
                           
                            
                           </p> </div>
                        </div>
                  
                  </div>
            </section>
        
        </>
    )
}

export default Four;