<div class="header">
	<h1 class="title j-typing"><?php $this->title() ?></h1>
	<?php if ($this->options->JPostCountingStatus === 'on') : ?>
		<div class="conting">
			<div class="info">
			<img src="<?php ParseAvatar($this->author->mail); ?>" />
			<div class="meta">
				<div class="author">
				<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
				</div>
				<div class="item">
					<svg class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path d="M512 42.666667C252.789333 42.666667 42.666667 252.8 42.666667 512c0 259.210667 210.122667 469.333333 469.333333 469.333333s469.333333-210.122667 469.333333-469.333333C981.333333 252.8 771.210667 42.666667 512 42.666667z m0 853.333333c-212.074667 0-384-171.914667-384-384 0-212.074667 171.925333-384 384-384s384 171.925333 384 384c0 212.085333-171.925333 384-384 384z m158.165333-286.165333a42.666667 42.666667 0 0 1-60.330666 60.341333l-128-128A42.666667 42.666667 0 0 1 469.333333 512V256a42.666667 42.666667 0 0 1 85.333334 0v238.336l115.498666 115.498667z" p-id="17397" fill="#909399"></path></svg>&nbsp;&nbsp;<span><?php $this->date('Y-m-d'); ?></span>
					<div class="line">/</div>
					<svg class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path d="M512 157.27104c104.35072 0 201.79968 31.89248 274.39616 89.8048 67.89632 54.16448 105.2928 124.75392 105.2928 198.75328s-37.39136 144.5888-105.2928 198.75328c-72.59648 57.91232-170.04544 89.8048-274.39616 89.8048-49.34656 0-98.85696 36.84352-156.18048 79.50848-9.53856 7.09632-21.55008 16.04096-33.5616 24.59136l0.04096-8.35072c0.384-63.60576 0.77824-129.37216-50.2016-161.19808-88.832-55.45472-139.78112-136.77568-139.78112-223.10912 0-74.00448 37.39136-144.5888 105.2928-198.75328 72.59136-57.9072 170.04032-89.8048 274.39104-89.8048m0-70.87104c-248.83712 0-450.56 160.92672-450.56 359.43424 0 115.03104 67.7376 217.44128 173.12768 283.23328 36.55168 22.81472-4.85376 194.55488 39.5008 207.55968 2.25792 0.66048 4.69504 0.97792 7.31136 0.97792 53.52448 0 178.53952-132.33152 230.62528-132.33152 248.83712 0 450.56-160.92672 450.56-359.43424C962.56 247.3216 760.83712 86.4 512 86.4z" fill="#666666" p-id="17004"></path><path d="M660.48 414.09024H363.52a35.84 35.84 0 1 1 0-71.68h296.96a35.84 35.84 0 1 1 0 71.68zM614.4 577.93024H409.6a35.84 35.84 0 1 1 0-71.68h204.8a35.84 35.84 0 1 1 0 71.68z" fill="#666666" p-id="17005"></path></svg>&nbsp;&nbsp;<span><?php $this->commentsNum('%d'); ?> 评论</span>
					<div class="line">/</div>
					<svg t="1607931368109" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="19831" width="16" height="16"><path d="M512 283.456c-165.248 0-299.392 74.304-408.128 228.864 107.2 154.112 241.28 228.224 408.128 228.224 166.848 0 300.928-74.112 408.128-228.224C811.392 357.76 677.248 283.52 512 283.52zM512 832c-213.888 0-384.512-106.688-512-320 129.408-213.312 300.032-320 512-320 211.968 0 382.592 106.688 512 320-127.488 213.312-298.112 320-512 320z m0-137.152a182.848 182.848 0 1 0 0-365.696 182.848 182.848 0 0 0 0 365.696zM512 576a64 64 0 1 1 0-128 64 64 0 0 1 0 128z" fill="#909399" p-id="19832"></path></svg>&nbsp;&nbsp;<span><?php getPostViews($this) ?> 阅读</span>
					<div class="line">/</div>
					<svg t="1607932012518" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="10103" width="16" height="16"><path d="M847.616 472.789333L744.746667 802.069333a42.666667 42.666667 0 0 1-30.72 28.736l-618.666667 149.333334c-31.018667 7.488-58.965333-20.48-51.477333-51.477334l149.333333-618.666666a42.666667 42.666667 0 0 1 28.736-30.72l329.28-102.890667 81.322667-98.133333 2.688-2.944a111.573333 111.573333 0 0 1 157.824 0.128l155.52 155.52a111.68 111.68 0 0 1 0.128 157.824l-2.944 2.688-98.133334 81.322666zM222.72 861.610667l447.786667-108.074667 91.733333-293.610667-198.165333-198.186666-293.610667 91.776L162.389333 801.28l224.490667-224.512A85.44 85.44 0 0 1 469.333333 469.333333a85.333333 85.333333 0 1 1-22.101333 167.786667L222.72 861.610667zM633.642667 210.645333l179.712 179.712 76.032-63.018666c9.109333-10.24 8.746667-26.133333-1.152-36.053334l-155.52-155.52a26.24 26.24 0 0 0-36.053334-1.173333l-63.018666 76.053333z" fill="#909399" p-id="10104"></path></svg>&nbsp;&nbsp;<span>全文共 <?php art_count($this->cid); ?> 字</span>
					<div class="line">/</div>
					<svg t="1607931422105" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="20921" width="17" height="17"><path d="M322.730667 822.613333a413.44 413.44 0 0 0 106.496-9.258666 375.466667 375.466667 0 0 1 127.146666-5.589334c23.338667 2.858667 42.026667 7.04 54.954667 10.965334 45.994667 11.733333 111.36 9.514667 128.213333-17.493334 12.416-19.968 10.794667-33.578667-1.109333-51.157333a80.469333 80.469333 0 0 0-9.045333-11.093333 1066.922667 1066.922667 0 0 1-31.701334-26.368 1093.034667 1093.034667 0 0 1-74.794666-70.826667 689.109333 689.109333 0 0 1-67.285334-80.768l-1.536-2.261333c-31.658667-48.597333-66.474667-45.525333-85.418666-13.525334a409.770667 409.770667 0 0 1-40.746667 56.789334c-17.493333 20.565333-35.413333 37.973333-55.68 55.338666-5.248 4.48-21.461333 17.92-17.578667 14.677334-0.170667 0.128-0.725333 0.64 2.176-3.029334-4.181333 5.12-40.533333 37.418667-51.2 49.578667-21.973333 24.874667-30.848 46.08-27.52 63.146667 3.072 16.042667 9.344 25.045333 19.2 31.786666a61.098667 61.098667 0 0 0 20.48 8.789334l4.949334 0.298666z m302.848-310.442666c58.709333 84.053333 159.232 161.834667 159.232 161.834666s88.021333 74.581333 27.178666 172.288c-60.842667 97.706667-224.128 54.528-224.128 54.528s-64.853333-20.906667-140.202666-4.181333c-75.306667 16.853333-140.202667 10.453333-140.202667 10.453333S213.333333 896.64 194.304 797.909333c-19.029333-98.730667 87.893333-172.373333 96.341333-182.784 8.32-10.538667 64.512-45.781333 104.618667-113.408 40.106667-67.669333 152.874667-108.373333 230.314667 10.453334z m236.330666-60.586667c0 19.541333 8.106667 102.101333-66.261333 103.765333-74.325333 1.621333-77.482667-50.261333-77.482667-87.466666 0-38.954667 8.021333-94.08 67.84-94.08 59.733333 0 75.904 58.410667 75.904 77.824z m-231.68-118.485333c-50.346667-6.485333-61.738667-52.138667-56.874666-97.834667 4.096-37.333333 48.768-94.677333 84.522666-86.442667 35.712 8.106667 68.266667 55.466667 61.696 96.170667-6.442667 40.832-38.869333 94.634667-89.344 88.106667zM416.213333 317.44c-36.693333 0-66.56-42.368-66.56-94.72 0-52.352 29.824-94.72 66.56-94.72 36.821333 0 66.56 42.368 66.56 94.72 0 52.352-29.738667 94.72-66.56 94.72z m-161.834666 194.816c-72.32 15.573333-99.242667-68.138667-91.306667-107.306667 0 0 8.533333-84.778667 67.242667-90.026666 46.634667-4.053333 80.981333 46.976 84.522666 76.16 2.176 18.944 12.074667 105.6-60.458666 121.173333z" p-id="20922" fill="#909399"></path></svg>&nbsp;&nbsp;<span id="baiduIncluded">正在检测是否收录...</span>
				</div>
		</div>
	</div>
	<div class="time"><?php $this->date('m/d'); ?></div>
	</div>
	<?php endif; ?>
</div>