(function () {
	'use strict';

	const scrollTablesElement = document.querySelector('.c-scroll-tables');
	const tableHeaderElements = scrollTablesElement.querySelectorAll('.c-scroll-table__header');
	const horizontalScrollElement = scrollTablesElement.querySelector('.scrollbar');
	let last_known_scroll_position = 0;
	let ticking = false;
	let scrollTablesTopPadding;


	/**
	 * Position a table columns header row to be fixed.
	 * 
	 * @private
	 * @param  {Object} header
	 */
	function positionHeader(header) {
		const specs = header.getBoundingClientRect();

		Object.assign(header.style, {
			position: 'fixed',
			top: specs.top + 'px',
			left: specs.left + 'px',
			width: header.parentElement.getBoundingClientRect().width + 'px',
			overflow: 'hidden'
		});
		
		header.parentElement.style.paddingTop = specs.height + 'px';
	}


	/**
	 * Setup the faux horizontal scroller.
	 *
	 * @private
	 * @param  {Object} scrollElement
	 */
	function applyHorizontalScroll(scrollElement) {
		const scrollTablesElementSpecs = scrollTablesElement.getBoundingClientRect();
		const width = scrollElement.parentElement.querySelector('.c-scroll-table__header').getBoundingClientRect().width;
		
		scrollElement.querySelector('.scrollbar__track').style.width = scrollElement.parentElement.querySelector('.c-scroll-table__body').getBoundingClientRect().width + 'px';

		Object.assign(scrollElement.style, {
			position: 'fixed',
			top: (scrollTablesElementSpecs.top + scrollTablesElementSpecs.height) + 'px',
			width: scrollElement.parentElement.getBoundingClientRect().width + 'px'
		});
	}


	/**
	 * Move the header and body of a table
	 *
	 * @private
	 * @param  {Number} pos
	 * @param  {Object} element
	 */
	function moveHeaderAndBody(pos, element) {
		const parent = element.parentElement;
		const body = parent.querySelector('.c-scroll-table__body');
		const head = parent.querySelector('.c-scroll-table__header').querySelector('.c-scroll-table__table');

		body.style.transform = 'translateX(-' + pos + 'px)';
		head.style.transform = 'translateX(-' + pos + 'px)';
	}


	// Loop through headers and position them so they mimic 'position: sticky'
	Array.prototype.slice.call(tableHeaderElements).forEach(positionHeader);


	// Set up horizontal scroll bar position/dimensions
	applyHorizontalScroll(horizontalScrollElement);


	// Add scroll listener
	horizontalScrollElement.addEventListener('scroll', e => {
		last_known_scroll_position = e.target.scrollLeft;

		if (!ticking) {
			window.requestAnimationFrame(function() {
				moveHeaderAndBody(last_known_scroll_position, e.target);
				ticking = false;
			});
		}
		ticking = true;
	});

}());