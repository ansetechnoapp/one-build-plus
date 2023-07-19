

function Appother() {

  return (
    <>
  {/* Loader Start */}
  {/* <div id="preloader">
      <div id="status">
          <div class="spinner">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
          </div>
      </div>
  </div> */}
  {/* Loader End */}
  
  {/* Hero Start */}
  
  <section className="relative md:py-24 py-16">
    <div className="container">
      <div className="grid grid-cols-1 pb-8">
        <h3 className="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
          Listing Categories
        </h3>
        <p className="text-slate-400 max-w-xl">
          A great plateform to buy, sell and rent your properties without any
          agent or commisions.
        </p>
      </div>
      {/*end grid*/}
      <div className="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 mt-8 md:gap-[30px] gap-3">
        <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
          <img src="assets/images/property/residential.jpg" alt="" />
          <div className="p-4">
            <a href="#" className="text-xl font-medium hover:text-green-600">
              Residential
            </a>
            <p className="text-slate-400 text-sm mt-1">46 Listings</p>
          </div>
        </div>
        {/*end content*/}
        <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
          <img src="assets/images/property/land.jpg" alt="" />
          <div className="p-4">
            <a href="#" className="text-xl font-medium hover:text-green-600">
              Land
            </a>
            <p className="text-slate-400 text-sm mt-1">124 Listings</p>
          </div>
        </div>
        {/*end content*/}
        <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
          <img src="assets/images/property/commercial.jpg" alt="" />
          <div className="p-4">
            <a href="#" className="text-xl font-medium hover:text-green-600">
              Commercial
            </a>
            <p className="text-slate-400 text-sm mt-1">265 Listings</p>
          </div>
        </div>
        {/*end content*/}
        <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
          <img src="assets/images/property/industrial.jpg" alt="" />
          <div className="p-4">
            <a href="#" className="text-xl font-medium hover:text-green-600">
              Industrial
            </a>
            <p className="text-slate-400 text-sm mt-1">452 Listings</p>
          </div>
        </div>
        {/*end content*/}
        <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
          <img src="assets/images/property/investment.jpg" alt="" />
          <div className="p-4">
            <a href="#" className="text-xl font-medium hover:text-green-600">
              Investment
            </a>
            <p className="text-slate-400 text-sm mt-1">12 Listings</p>
          </div>
        </div>
        {/*end content*/}
      </div>
      {/*end grid*/}
    </div>
    {/*end container*/}
    <div className="container lg:mt-24 mt-16">
      <div className="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
        <div className="md:col-span-5">
          <div className="relative">
            <img
              src="assets/images/about.jpg"
              className="rounded-xl shadow-md"
              alt=""
            />
            <div className="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
              <a
                href="#!"
                data-type="youtube"
                data-id="yba7hPeTSjk"
                className="lightbox h-20 w-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600"
              >
                <i className="mdi mdi-play inline-flex items-center justify-center text-2xl" />
              </a>
            </div>
          </div>
        </div>
        {/*end col*/}
        <div className="md:col-span-7">
          <div className="lg:ms-4">
            <h4 className="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold">
              Efficiency. Transparency. <br /> Control.
            </h4>
            <p className="text-slate-400 max-w-xl">
              Hously developed a platform for the Real Estate marketplace that
              allows buyers and sellers to easily execute a transaction on their
              own. The platform drives efficiency, cost transparency and control
              into the hands of the consumers. Hously is Real Estate Redefined.
            </p>
            <div className="mt-4">
              <a
                href="#"
                className="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3"
              >
                Learn More{" "}
              </a>
            </div>
          </div>
        </div>
        {/*end col*/}
      </div>
      {/*end grid*/}
    </div>
    {/*end container*/}
    <div className="container lg:mt-24 mt-16">
      <div className="grid grid-cols-1 pb-8 text-center">
        <h3 className="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
          How It Works
        </h3>
        <p className="text-slate-400 max-w-xl mx-auto">
          A great plateform to buy, sell and rent your properties without any
          agent or commisions.
        </p>
      </div>
      {/*end grid*/}
      <div className="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
        {/* Content */}
        <div className="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
          <div className="relative overflow-hidden text-transparent -m-3">
            <i
              data-feather="hexagon"
              className="h-32 w-32 fill-green-600/5 mx-auto"
            />
            <div className="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
              <i className="uil uil-estate" />
            </div>
          </div>
          <div className="mt-6">
            <h5 className="text-xl font-medium">Evaluate Property</h5>
            <p className="text-slate-400 mt-3">
              If the distribution of letters and 'words' is random, the reader
              will not be distracted from making.
            </p>
          </div>
        </div>
        {/* Content */}
        {/* Content */}
        <div className="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
          <div className="relative overflow-hidden text-transparent -m-3">
            <i
              data-feather="hexagon"
              className="h-32 w-32 fill-green-600/5 mx-auto"
            />
            <div className="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
              <i className="uil uil-bag" />
            </div>
          </div>
          <div className="mt-6">
            <h5 className="text-xl font-medium">Meeting with Agent</h5>
            <p className="text-slate-400 mt-3">
              If the distribution of letters and 'words' is random, the reader
              will not be distracted from making.
            </p>
          </div>
        </div>
        {/* Content */}
        {/* Content */}
        <div className="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
          <div className="relative overflow-hidden text-transparent -m-3">
            <i
              data-feather="hexagon"
              className="h-32 w-32 fill-green-600/5 mx-auto"
            />
            <div className="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
              <i className="uil uil-key-skeleton" />
            </div>
          </div>
          <div className="mt-6">
            <h5 className="text-xl font-medium">Close the Deal</h5>
            <p className="text-slate-400 mt-3">
              If the distribution of letters and 'words' is random, the reader
              will not be distracted from making.
            </p>
          </div>
        </div>
        {/* Content */}
      </div>
      {/*end grid*/}
    </div>
    {/*end container*/}
    <div className="container lg:mt-24 mt-16">
      <div className="grid grid-cols-1 pb-8 text-center">
        <h3 className="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
          Featured Properties
        </h3>
        <p className="text-slate-400 max-w-xl mx-auto">
          A great plateform to buy, sell and rent your properties without any
          agent or commisions.
        </p>
      </div>
      {/*end grid*/}
      <div className="grid grid-cols-1 mt-8 relative">
        <div className="tiny-home-slide-three">
          <div className="tiny-slide">
            <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
              <div className="relative">
                <img src="assets/images/property/1.jpg" alt="" />
                <div className="absolute top-4 end-4">
                  <a
                    href="javascript:void(0)"
                    className="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"
                  >
                    <i className="mdi mdi-heart mdi-18px" />
                  </a>
                </div>
              </div>
              <div className="p-6">
                <div className="pb-6">
                  <a
                    href="property-detail.html"
                    className="text-lg hover:text-green-600 font-medium ease-in-out duration-500"
                  >
                    10765 Hillshire Ave, Baton Rouge, LA 70810, USA
                  </a>
                </div>
                <ul className="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                  <li className="flex items-center me-4">
                    <i className="uil uil-compress-arrows text-2xl me-2 text-green-600" />
                    <span>8000sqf</span>
                  </li>
                  <li className="flex items-center me-4">
                    <i className="uil uil-bed-double text-2xl me-2 text-green-600" />
                    <span>4 Beds</span>
                  </li>
                  <li className="flex items-center">
                    <i className="uil uil-bath text-2xl me-2 text-green-600" />
                    <span>4 Baths</span>
                  </li>
                </ul>
                <ul className="pt-6 flex justify-between items-center list-none">
                  <li>
                    <span className="text-slate-400">Price</span>
                    <p className="text-lg font-medium">$5000</p>
                  </li>
                  <li>
                    <span className="text-slate-400">Rating</span>
                    <ul className="text-lg font-medium text-amber-400 list-none">
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline text-black dark:text-white">
                        5.0(30)
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            {/*end property content*/}
          </div>
          <div className="tiny-slide">
            <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
              <div className="relative">
                <img src="assets/images/property/2.jpg" alt="" />
                <div className="absolute top-4 end-4">
                  <a
                    href="javascript:void(0)"
                    className="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"
                  >
                    <i className="mdi mdi-heart mdi-18px" />
                  </a>
                </div>
              </div>
              <div className="p-6">
                <div className="pb-6">
                  <a
                    href="property-detail.html"
                    className="text-lg hover:text-green-600 font-medium ease-in-out duration-500"
                  >
                    59345 STONEWALL DR, Plaquemine, LA 70764, USA
                  </a>
                </div>
                <ul className="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                  <li className="flex items-center me-4">
                    <i className="uil uil-compress-arrows text-2xl me-2 text-green-600" />
                    <span>8000sqf</span>
                  </li>
                  <li className="flex items-center me-4">
                    <i className="uil uil-bed-double text-2xl me-2 text-green-600" />
                    <span>4 Beds</span>
                  </li>
                  <li className="flex items-center">
                    <i className="uil uil-bath text-2xl me-2 text-green-600" />
                    <span>4 Baths</span>
                  </li>
                </ul>
                <ul className="pt-6 flex justify-between items-center list-none">
                  <li>
                    <span className="text-slate-400">Price</span>
                    <p className="text-lg font-medium">$5000</p>
                  </li>
                  <li>
                    <span className="text-slate-400">Rating</span>
                    <ul className="text-lg font-medium text-amber-400 list-none">
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline text-black dark:text-white">
                        5.0(30)
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            {/*end property content*/}
          </div>
          <div className="tiny-slide">
            <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
              <div className="relative">
                <img src="assets/images/property/3.jpg" alt="" />
                <div className="absolute top-4 end-4">
                  <a
                    href="javascript:void(0)"
                    className="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"
                  >
                    <i className="mdi mdi-heart mdi-18px" />
                  </a>
                </div>
              </div>
              <div className="p-6">
                <div className="pb-6">
                  <a
                    href="property-detail.html"
                    className="text-lg hover:text-green-600 font-medium ease-in-out duration-500"
                  >
                    3723 SANDBAR DR, Addis, LA 70710, USA
                  </a>
                </div>
                <ul className="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                  <li className="flex items-center me-4">
                    <i className="uil uil-compress-arrows text-2xl me-2 text-green-600" />
                    <span>8000sqf</span>
                  </li>
                  <li className="flex items-center me-4">
                    <i className="uil uil-bed-double text-2xl me-2 text-green-600" />
                    <span>4 Beds</span>
                  </li>
                  <li className="flex items-center">
                    <i className="uil uil-bath text-2xl me-2 text-green-600" />
                    <span>4 Baths</span>
                  </li>
                </ul>
                <ul className="pt-6 flex justify-between items-center list-none">
                  <li>
                    <span className="text-slate-400">Price</span>
                    <p className="text-lg font-medium">$5000</p>
                  </li>
                  <li>
                    <span className="text-slate-400">Rating</span>
                    <ul className="text-lg font-medium text-amber-400 list-none">
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline text-black dark:text-white">
                        5.0(30)
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            {/*end property content*/}
          </div>
          <div className="tiny-slide">
            <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
              <div className="relative">
                <img src="assets/images/property/4.jpg" alt="" />
                <div className="absolute top-4 end-4">
                  <a
                    href="javascript:void(0)"
                    className="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"
                  >
                    <i className="mdi mdi-heart mdi-18px" />
                  </a>
                </div>
              </div>
              <div className="p-6">
                <div className="pb-6">
                  <a
                    href="property-detail.html"
                    className="text-lg hover:text-green-600 font-medium ease-in-out duration-500"
                  >
                    Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA
                  </a>
                </div>
                <ul className="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                  <li className="flex items-center me-4">
                    <i className="uil uil-compress-arrows text-2xl me-2 text-green-600" />
                    <span>8000sqf</span>
                  </li>
                  <li className="flex items-center me-4">
                    <i className="uil uil-bed-double text-2xl me-2 text-green-600" />
                    <span>4 Beds</span>
                  </li>
                  <li className="flex items-center">
                    <i className="uil uil-bath text-2xl me-2 text-green-600" />
                    <span>4 Baths</span>
                  </li>
                </ul>
                <ul className="pt-6 flex justify-between items-center list-none">
                  <li>
                    <span className="text-slate-400">Price</span>
                    <p className="text-lg font-medium">$5000</p>
                  </li>
                  <li>
                    <span className="text-slate-400">Rating</span>
                    <ul className="text-lg font-medium text-amber-400 list-none">
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline text-black dark:text-white">
                        5.0(30)
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            {/*end property content*/}
          </div>
          <div className="tiny-slide">
            <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
              <div className="relative">
                <img src="assets/images/property/5.jpg" alt="" />
                <div className="absolute top-4 end-4">
                  <a
                    href="javascript:void(0)"
                    className="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"
                  >
                    <i className="mdi mdi-heart mdi-18px" />
                  </a>
                </div>
              </div>
              <div className="p-6">
                <div className="pb-6">
                  <a
                    href="property-detail.html"
                    className="text-lg hover:text-green-600 font-medium ease-in-out duration-500"
                  >
                    710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA
                  </a>
                </div>
                <ul className="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                  <li className="flex items-center me-4">
                    <i className="uil uil-compress-arrows text-2xl me-2 text-green-600" />
                    <span>8000sqf</span>
                  </li>
                  <li className="flex items-center me-4">
                    <i className="uil uil-bed-double text-2xl me-2 text-green-600" />
                    <span>4 Beds</span>
                  </li>
                  <li className="flex items-center">
                    <i className="uil uil-bath text-2xl me-2 text-green-600" />
                    <span>4 Baths</span>
                  </li>
                </ul>
                <ul className="pt-6 flex justify-between items-center list-none">
                  <li>
                    <span className="text-slate-400">Price</span>
                    <p className="text-lg font-medium">$5000</p>
                  </li>
                  <li>
                    <span className="text-slate-400">Rating</span>
                    <ul className="text-lg font-medium text-amber-400 list-none">
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline text-black dark:text-white">
                        5.0(30)
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            {/*end property content*/}
          </div>
          <div className="tiny-slide">
            <div className="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
              <div className="relative">
                <img src="assets/images/property/6.jpg" alt="" />
                <div className="absolute top-4 end-4">
                  <a
                    href="javascript:void(0)"
                    className="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"
                  >
                    <i className="mdi mdi-heart mdi-18px" />
                  </a>
                </div>
              </div>
              <div className="p-6">
                <div className="pb-6">
                  <a
                    href="property-detail.html"
                    className="text-lg hover:text-green-600 font-medium ease-in-out duration-500"
                  >
                    5133 MCLAIN WAY, Baton Rouge, LA 70809, USA
                  </a>
                </div>
                <ul className="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                  <li className="flex items-center me-4">
                    <i className="uil uil-compress-arrows text-2xl me-2 text-green-600" />
                    <span>8000sqf</span>
                  </li>
                  <li className="flex items-center me-4">
                    <i className="uil uil-bed-double text-2xl me-2 text-green-600" />
                    <span>4 Beds</span>
                  </li>
                  <li className="flex items-center">
                    <i className="uil uil-bath text-2xl me-2 text-green-600" />
                    <span>4 Baths</span>
                  </li>
                </ul>
                <ul className="pt-6 flex justify-between items-center list-none">
                  <li>
                    <span className="text-slate-400">Price</span>
                    <p className="text-lg font-medium">$5000</p>
                  </li>
                  <li>
                    <span className="text-slate-400">Rating</span>
                    <ul className="text-lg font-medium text-amber-400 list-none">
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline">
                        <i className="mdi mdi-star" />
                      </li>
                      <li className="inline text-black dark:text-white">
                        5.0(30)
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            {/*end property content*/}
          </div>
        </div>
      </div>
      {/*en grid*/}
    </div>
    {/*end container*/}
    <div className="container lg:mt-24 mt-16">
      <div className="grid grid-cols-1 pb-8 text-center">
        <h3 className="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
          What Our Client Say ?
        </h3>
        <p className="text-slate-400 max-w-xl mx-auto">
          A great plateform to buy, sell and rent your properties without any
          agent or commisions.
        </p>
      </div>
      {/*end grid*/}
      <div className="flex justify-center relative mt-16">
        <div className="relative lg:w-1/3 md:w-1/2 w-full">
          <div className="absolute -top-20 md:-start-24 -start-0">
            <i className="mdi mdi-format-quote-open text-9xl opacity-5" />
          </div>
          <div className="absolute bottom-28 md:-end-24 -end-0">
            <i className="mdi mdi-format-quote-close text-9xl opacity-5" />
          </div>
          <div className="tiny-single-item">
            <div className="tiny-slide">
              <div className="text-center">
                <p className="text-xl text-slate-400 italic">
                  {" "}
                  " Hously made the processes so easy. Hously instantly
                  increased the amount of interest and ultimately saved us over
                  $10,000. "{" "}
                </p>
                <div className="text-center mt-5">
                  <ul className="text-xl font-medium text-amber-400 list-none mb-2">
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                  </ul>
                  <img
                    src="assets/images/client/01.jpg"
                    className="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                    alt=""
                  />
                  <h6 className="mt-2 fw-semibold">Christa Smith</h6>
                  <span className="text-slate-400 text-sm">Manager</span>
                </div>
              </div>
            </div>
            <div className="tiny-slide">
              <div className="text-center">
                <p className="text-xl text-slate-400 italic">
                  {" "}
                  " I highly recommend Hously as the new way to sell your home
                  "by owner". My home sold in 24 hours for the asking price.
                  Best $400 you could spend to sell your home. "{" "}
                </p>
                <div className="text-center mt-5">
                  <ul className="text-xl font-medium text-amber-400 list-none mb-2">
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                  </ul>
                  <img
                    src="assets/images/client/02.jpg"
                    className="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                    alt=""
                  />
                  <h6 className="mt-2 fw-semibold">Christa Smith</h6>
                  <span className="text-slate-400 text-sm">Manager</span>
                </div>
              </div>
            </div>
            <div className="tiny-slide">
              <div className="text-center">
                <p className="text-xl text-slate-400 italic">
                  {" "}
                  " My favorite part about selling my home myself was that we
                  got to meet and get to know the people personally. This made
                  it so much more enjoyable! "{" "}
                </p>
                <div className="text-center mt-5">
                  <ul className="text-xl font-medium text-amber-400 list-none mb-2">
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                  </ul>
                  <img
                    src="assets/images/client/03.jpg"
                    className="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                    alt=""
                  />
                  <h6 className="mt-2 fw-semibold">Christa Smith</h6>
                  <span className="text-slate-400 text-sm">Manager</span>
                </div>
              </div>
            </div>
            <div className="tiny-slide">
              <div className="text-center">
                <p className="text-xl text-slate-400 italic">
                  {" "}
                  " Great experience all around! Easy to use and efficient. "{" "}
                </p>
                <div className="text-center mt-5">
                  <ul className="text-xl font-medium text-amber-400 list-none mb-2">
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                  </ul>
                  <img
                    src="assets/images/client/04.jpg"
                    className="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                    alt=""
                  />
                  <h6 className="mt-2 fw-semibold">Christa Smith</h6>
                  <span className="text-slate-400 text-sm">Manager</span>
                </div>
              </div>
            </div>
            <div className="tiny-slide">
              <div className="text-center">
                <p className="text-xl text-slate-400 italic">
                  {" "}
                  " Hously made selling my home easy and stress free. They went
                  above and beyond what is expected. "{" "}
                </p>
                <div className="text-center mt-5">
                  <ul className="text-xl font-medium text-amber-400 list-none mb-2">
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                  </ul>
                  <img
                    src="assets/images/client/05.jpg"
                    className="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                    alt=""
                  />
                  <h6 className="mt-2 fw-semibold">Christa Smith</h6>
                  <span className="text-slate-400 text-sm">Manager</span>
                </div>
              </div>
            </div>
            <div className="tiny-slide">
              <div className="text-center">
                <p className="text-xl text-slate-400 italic">
                  {" "}
                  " Hously is fair priced, quick to respond, and easy to use. I
                  highly recommend their services! "{" "}
                </p>
                <div className="text-center mt-5">
                  <ul className="text-xl font-medium text-amber-400 list-none mb-2">
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                    <li className="inline">
                      <i className="mdi mdi-star" />
                    </li>
                  </ul>
                  <img
                    src="assets/images/client/06.jpg"
                    className="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                    alt=""
                  />
                  <h6 className="mt-2 fw-semibold">Christa Smith</h6>
                  <span className="text-slate-400 text-sm">Manager</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/*end grid*/}
    </div>
    {/*end container*/}
    <div className="container lg:mt-24 mt-16">
      <div className="grid grid-cols-1 text-center">
        <h3 className="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
          Have Question ? Get in touch!
        </h3>
        <p className="text-slate-400 max-w-xl mx-auto">
          A great plateform to buy, sell and rent your properties without any
          agent or commisions.
        </p>
        <div className="mt-6">
          <a
            href="contact.html"
            className="btn bg-green-600 hover:bg-green-700 text-white rounded-md"
          >
            <i className="uil uil-phone align-middle me-2" /> Contact us
          </a>
        </div>
      </div>
      {/*end grid*/}
    </div>
    {/*end container*/}
  </section>
  {/*end section*/}
  {/* End */}
  {/* Start Footer */}
  <footer className="relative bg-slate-900 dark:bg-slate-800 mt-24">
    <div className="container">
      <div className="grid grid-cols-1">
        <div className="relative py-16">
          {/* Subscribe */}
          <div className="relative w-full">
            <div className="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
              <div className="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                <div className="ltr:md:text-left rtl:md:text-right text-center z-1">
                  <h3 className="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                    Subscribe to Newsletter!
                  </h3>
                  <p className="text-slate-400 max-w-xl mx-auto">
                    Subscribe to get latest updates and information.
                  </p>
                </div>
                <div className="subcribe-form z-1">
                  <form className="relative max-w-lg md:ms-auto">
                    <input
                      type="email"
                      id="subcribe"
                      name="email"
                      className="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700"
                      placeholder="Enter your email :"
                    />
                    <button
                      type="submit"
                      className="btn bg-green-600 hover:bg-green-700 text-white rounded-full"
                    >
                      Subscribe
                    </button>
                  </form>
                  {/*end form*/}
                </div>
              </div>
              <div className="absolute -top-5 -start-5">
                <div className="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45" />
              </div>
              <div className="absolute -bottom-5 -end-5">
                <div className="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90" />
              </div>
            </div>
            <div className="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
              <div className="lg:col-span-4 md:col-span-12">
                <a href="#" className="text-[22px] focus:outline-none">
                  <img src="assets/images/logo-light.png" alt="" />
                </a>
                <p className="mt-6 text-gray-300">
                  A great plateform to buy, sell and rent your properties
                  without any agent or commisions.
                </p>
              </div>
              {/*end col*/}
              <div className="lg:col-span-2 md:col-span-4">
                <h5 className="tracking-[1px] text-gray-100 font-semibold">
                  Company
                </h5>
                <ul className="list-none footer-list mt-6">
                  <li>
                    <a
                      href="aboutus.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> About us
                    </a>
                  </li>
                  <li className="mt-[10px]">
                    <a
                      href="features.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Services
                    </a>
                  </li>
                  <li className="mt-[10px]">
                    <a
                      href="pricing.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Pricing
                    </a>
                  </li>
                  <li className="mt-[10px]">
                    <a
                      href="blog.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Blog
                    </a>
                  </li>
                  <li className="mt-[10px]">
                    <a
                      href="auth-login.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Login
                    </a>
                  </li>
                </ul>
              </div>
              {/*end col*/}
              <div className="lg:col-span-3 md:col-span-4">
                <h5 className="tracking-[1px] text-gray-100 font-semibold">
                  Usefull Links
                </h5>
                <ul className="list-none footer-list mt-6">
                  <li>
                    <a
                      href="terms.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Terms of
                      Services
                    </a>
                  </li>
                  <li className="mt-[10px]">
                    <a
                      href="privacy.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Privacy
                      Policy
                    </a>
                  </li>
                  <li className="mt-[10px]">
                    <a
                      href="listing-one.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Listing
                    </a>
                  </li>
                  <li className="mt-[10px]">
                    <a
                      href="contact.html"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      <i className="uil uil-angle-right-b me-1" /> Contact
                    </a>
                  </li>
                </ul>
              </div>
              {/*end col*/}
              <div className="lg:col-span-3 md:col-span-4">
                <h5 className="tracking-[1px] text-gray-100 font-semibold">
                  Contact Details
                </h5>
                <div className="flex mt-6">
                  <i
                    data-feather="map-pin"
                    className="w-5 h-5 text-green-600 me-3"
                  />
                  <div className="">
                    <h6 className="text-gray-300 mb-2">
                      C/54 Northwest Freeway, <br /> Suite 558, <br /> Houston,
                      USA 485
                    </h6>
                    <a
                      href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                      data-type="iframe"
                      className="text-green-600 hover:text-green-700 duration-500 ease-in-out lightbox"
                    >
                      View on Google map
                    </a>
                  </div>
                </div>
                <div className="flex mt-6">
                  <i
                    data-feather="mail"
                    className="w-5 h-5 text-green-600 me-3"
                  />
                  <div className="">
                    <a
                      href="mailto:contact@example.com"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      contact@example.com
                    </a>
                  </div>
                </div>
                <div className="flex mt-6">
                  <i
                    data-feather="phone"
                    className="w-5 h-5 text-green-600 me-3"
                  />
                  <div className="">
                    <a
                      href="tel:+152534-468-854"
                      className="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"
                    >
                      +152 534-468-854
                    </a>
                  </div>
                </div>
              </div>
              {/*end col*/}
            </div>
            {/*end grid*/}
          </div>
          {/* Subscribe */}
        </div>
      </div>
    </div>
    {/*end container*/}
    <div className="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
      <div className="container text-center">
        <div className="grid md:grid-cols-2 items-center gap-6">
          <div className="ltr:md:text-left rtl:md:text-right text-center">
            <p className="mb-0 text-gray-300">
              © Hously. Design with <i className="mdi mdi-heart text-red-600" />{" "}
              by{" "}
              <a
                href="https://shreethemes.in/"
                target="_blank"
                className="text-reset"
              >
                Shreethemes
              </a>
              .
            </p>
          </div>
          <ul className="list-none ltr:md:text-right rtl:md:text-left text-center">
            <li className="inline">
              <a
                href="https://1.envato.market/hously"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="shopping-cart" className="h-4 w-4" />
              </a>
            </li>
            <li className="inline">
              <a
                href="https://dribbble.com/shreethemes"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="dribbble" className="h-4 w-4" />
              </a>
            </li>
            <li className="inline">
              <a
                href="https://www.behance.net/shreethemes"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i className="uil uil-behance align-baseline" />
              </a>
            </li>
            <li className="inline">
              <a
                href="http://linkedin.com/company/shreethemes"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="linkedin" className="h-4 w-4" />
              </a>
            </li>
            <li className="inline">
              <a
                href="https://www.facebook.com/shreethemes"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="facebook" className="h-4 w-4" />
              </a>
            </li>
            <li className="inline">
              <a
                href="https://www.instagram.com/shreethemes/"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="instagram" className="h-4 w-4" />
              </a>
            </li>
            <li className="inline">
              <a
                href="https://twitter.com/shreethemes"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="twitter" className="h-4 w-4" />
              </a>
            </li>
            <li className="inline">
              <a
                href="mailto:support@shreethemes.in"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="mail" className="h-4 w-4" />
              </a>
            </li>
            <li className="inline">
              <a
                href="https://forms.gle/QkTueCikDGqJnbky9"
                target="_blank"
                className="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"
              >
                <i data-feather="file-text" className="h-4 w-4" />
              </a>
            </li>
          </ul>
          {/*end icon*/}
        </div>
        {/*end grid*/}
      </div>
      {/*end container*/}
    </div>
  </footer>
  {/*end footer*/}
  {/* End Footer */}
 
</>

  )
}

export default Appother
