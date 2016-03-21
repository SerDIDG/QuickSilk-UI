<?

$data = '';
switch($_GET['view']){
	case 'agenda':
		$data = '<div class="com__calendar-agenda" data-element="Com.CalendarAgenda" data-node="ComCalendarAgenda:{}:container" data-config=\'{"name" : "positionId"}\'>
	                <div class="calendar__templates" data-node="templates:{}">
	                    <div data-node="event:{}">
	                        <div class="com__calendar-event-tooltip__content" data-node="container">
	                            <div class="lt__post">
	                                <h4 class="post-title" data-node="title"></h4>
	                                <div class="post-info">
	                                    <div class="pt__line-info">
	                                        <div class="date" data-node="date"></div>
	                                    </div>
	                                </div>
	                                <div class="post-abstract" data-node="description-container|description"></div>
	                                <div data-node="button-container">
	                                    <hr>
	                                    <div class="btn-wrap pull-center">
	                                        <a class="button" data-node="button">View More</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="calendar__title">
	                    <div class="pt__toolbar is-flex" data-node="buttons:{}:container">
	                        <div class="inner clear">
	                            <div class="left">
				                    <ul class="group" data-node="views:{}">
				                        <li>
				                            <div class="button button-primary" data-node="agenda">Agenda</div>
				                        </li>
				                        <li>
				                            <div class="button button-secondary" data-node="week">Week</div>
				                        </li>
				                        <li>
				                            <div class="button button-secondary" data-node="month">Month</div>
				                        </li>
				                    </ul>
	                            </div>
	                            <div class="center">
	                                <ul class="group is-adaptive">
	                                    <li>
	                                        <div class="button" data-node="prev">&lt;</div>
	                                    </li>
	                                    <li class="is-field medium">
	                                        <select data-element="Com.Select" name="month">
	                                            <option value="0">January</option>
	                                            <option value="1" selected>February</option>
	                                            <option value="2">March</option>
	                                            <option value="3">April</option>
	                                            <option value="4">May</option>
	                                            <option value="5">June</option>
	                                            <option value="6">July</option>
	                                            <option value="7">August</option>
	                                            <option value="8">September</option>
	                                            <option value="9">October</option>
	                                            <option value="10">November</option>
	                                            <option value="11">December</option>
	                                        </select>
	                                    </li>
	                                    <li class="is-field x-small">
	                                        <select data-element="Com.Select" name="year">
	                                            <option value="2016" selected>2016</option>
	                                            <option value="2015">2015</option>
	                                        </select>
	                                    </li>
	                                    <li>
	                                        <div class="button" data-node="next">&gt;</div>
	                                    </li>
	                                </ul>
	                            </div>
				                <div class="right">
				                    <ul class="group is-adaptive">
				                        <li class="is-field large">
				                            <div class="form-field has-icon-right">
				                                <input type="text" placeholder="Search" name="search" data-node="search-input">
				                                <div class="icon small search linked" title="Search" data-node="search-button"></div>
				                            </div>
				                        </li>
				                    </ul>
				                </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="calendar__table">
	                    <table>
	                        <tbody>
	                            <tr class="today" data-node="days:[]:container">
	                                <td class="table__dayname">
	                                    <div class="calendar__dayname">
	                                        <div class="label">Thu 12</div>
	                                    </div>
	                                </td>
	                                <td class="table__events">
	                                    <div class="calendar__events-holder" data-node="events-holder">
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">All day</div>
	                                                <div class="title">
	                                                    <a>Some event text</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">All day</div>
	                                                <div class="title">
	                                                    <a>Some event text</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">12:45</div>
	                                                <div class="title">
	                                                    <a>Some event text</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">20:00</div>
	                                                <div class="title">
	                                                    <a>Some event very long text description</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                            <tr class="default" data-node="days:[]:container">
	                                <td class="table__dayname">
	                                    <div class="calendar__dayname">
	                                        <div class="label">Fri 13</div>
	                                    </div>
	                                </td>
	                                <td class="table__events">
	                                    <div class="calendar__events-holder" data-node="events-holder">
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">All day</div>
	                                                <div class="title">
	                                                    <a>Some event text</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">All day</div>
	                                                <div class="title">
	                                                    <a>Some event text</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">12:45</div>
	                                                <div class="title">
	                                                    <a>Some event text</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                        <div class="com__calendar-event is-long">
	                                            <div class="label">
	                                                <div class="time">20:00</div>
	                                                <div class="title">
	                                                    <a>Some event very long text description</a>
	                                                </div>
	                                            </div>
	                                            <div class="abstract">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultrices ante sit amet porta. Proin felis risus, malesuada et dapibus eget, condimentum in arcu. Nunc sollicitudin euismod pharetra. Vivamus pharetra sem felis, nec commodo arcu iaculis a. Maecenas imperdiet sollicitudin dapibus. In ac justo vel ante ultricies convallis. Pellentesque tristique consectetur metus, in blandit arcu ornare in. </p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </div>
	            </div>';
		break;

	case 'week':
		$data = '<div class="com__calendar-week" data-element="Com.CalendarWeek" data-node="ComCalendarWeek:{}:container" data-config=\'{"name" : "positionId"}\'>
	                <div class="calendar__templates" data-node="templates:{}">
	                    <div data-node="event:{}">
	                        <div class="com__calendar-event-tooltip__content" data-node="container">
	                            <div class="lt__post">
	                                <h4 class="post-title" data-node="title"></h4>
	                                <div class="post-info">
	                                    <div class="pt__line-info">
	                                        <div class="date" data-node="date"></div>
	                                    </div>
	                                </div>
	                                <div class="post-abstract" data-node="description-container|description"></div>
	                                <div data-node="button-container">
	                                    <hr>
	                                    <div class="btn-wrap pull-center">
	                                        <a class="button" data-node="button">View More</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="calendar__title">
	                    <div class="pt__toolbar is-flex" data-node="buttons:{}:container">
	                        <div class="inner clear">
	                            <div class="left">
				                    <ul class="group" data-node="views:{}">
				                        <li>
				                            <div class="button button-secondary" data-node="agenda">Agenda</div>
				                        </li>
				                        <li>
				                            <div class="button button-primary" data-node="week">Week</div>
				                        </li>
				                        <li>
				                            <div class="button button-secondary" data-node="month">Month</div>
				                        </li>
				                    </ul>
	                            </div>
	                            <div class="center">
	                                <ul class="group is-adaptive">
	                                    <li>
	                                        <div class="button" data-node="prev">&lt;</div>
	                                    </li>
	                                    <li class="is-field medium">
	                                        <select data-element="Com.Select" name="week">
	                                            <option value="10">Jan 31 - Feb 6</option>
	                                            <option value="11" selected>Feb 7 - Feb 13</option>
	                                        </select>
	                                    </li>
	                                    <li class="is-field x-small">
	                                        <select data-element="Com.Select" name="year">
	                                            <option value="2016" selected>2016</option>
	                                            <option value="2015">2015</option>
	                                        </select>
	                                    </li>
	                                    <li>
	                                        <div class="button" data-node="next">&gt;</div>
	                                    </li>
	                                </ul>
	                            </div>
				                <div class="right">
				                    <ul class="group is-adaptive">
				                        <li class="is-field large">
				                            <div class="form-field has-icon-right">
				                                <input type="text" placeholder="Search" name="search" data-node="search-input">
				                                <div class="icon small search linked" title="Search" data-node="search-button"></div>
				                            </div>
				                        </li>
				                    </ul>
				                </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="calendar__table">
	                    <table>
	                        <thead>
	                            <tr>
	                            	<th class="event-type"></th>
	                                <th>Sun 7, \'16</th>
	                                <th>Mon 8, \'16</th>
	                                <th>Tue 9, \'16</th>
	                                <th>Wed 10, \'16</th>
	                                <th>Thu 11, \'16</th>
	                                <th>Fri 12, \'16</th>
	                                <th>Sat 13, \'16</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr class="is-allday">
	                            	<td class="event-type">
	                            		<div class="calendar__type">
	                            			<div class="label">All day</div>
										</div>
									</td>
	                                <td class="weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner"></div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__events-holder" data-node="events-holder">
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit commodo porttitor. Vestibulum pulvinar mollis urna non dignissim.", "url" : "http://quicksilk.com"}}\'>
	                                                    <div class="label">Some event text</div>
	                                                </div>
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">Some event text</div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">

	                                </td>
	                                <td class="default today" data-node="days:[]:container">

	                                </td>
	                                <td class="default" data-node="days:[]:container">

	                                </td>
	                                <td class="default" data-node="days:[]:container">

	                                </td>
	                                <td class="weekend" data-node="days:[]:container">

	                                </td>
	                            </tr>
	                            <tr>
	                            	<td class="event-type"></td>
	                                <td class="weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner"></div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__events-holder" data-node="events-holder">
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">
	                                                        <div class="time">12:45</div>
	                                                        <div class="title">Some event text</div>
	                                                    </div>
	                                                </div>
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">
	                                                        <div class="time">13:00</div>
	                                                        <div class="title">Some event very long text description</div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">

	                                </td>
	                                <td class="default today" data-node="days:[]:container">

	                                </td>
	                                <td class="default" data-node="days:[]:container">

	                                </td>
	                                <td class="default" data-node="days:[]:container">

	                                </td>
	                                <td class="weekend" data-node="days:[]:container">

	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </div>
	            </div>';
		break;

	case 'month':
		$data = '<div class="com__calendar-month" data-element="Com.CalendarMonth" data-node="ComCalendarMonth:{}:container" data-config=\'{"name" : "positionId"}\'>
	                <div class="calendar__templates" data-node="templates:{}">
	                    <div data-node="event:{}">
	                        <div class="com__calendar-event-tooltip__content" data-node="container">
	                            <div class="lt__post">
	                                <h4 class="post-title" data-node="title"></h4>
	                                <div class="post-info">
	                                    <div class="pt__line-info">
	                                        <div class="date" data-node="date"></div>
	                                    </div>
	                                </div>
	                                <div class="post-abstract" data-node="description-container|description"></div>
	                                <div data-node="button-container">
	                                    <hr>
	                                    <div class="btn-wrap pull-center">
	                                        <a class="button" data-node="button">View More</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="calendar__title">
	                    <div class="pt__toolbar is-flex" data-node="buttons:{}:container">
	                        <div class="inner clear">
	                            <div class="left">
				                    <ul class="group" data-node="views:{}">
				                        <li>
				                            <div class="button button-secondary" data-node="agenda">Agenda</div>
				                        </li>
				                        <li>
				                            <div class="button button-secondary" data-node="week">Week</div>
				                        </li>
				                        <li>
				                            <div class="button button-primary" data-node="month">Month</div>
				                        </li>
				                    </ul>
	                            </div>
	                            <div class="center">
	                                <ul class="group is-adaptive">
	                                    <li>
	                                        <div class="button" data-node="prev">&lt;</div>
	                                    </li>
	                                    <li class="is-field medium">
	                                        <select data-element="Com.Select" name="month">
	                                            <option value="0">January</option>
	                                            <option value="1">February</option>
	                                            <option value="2">March</option>
	                                            <option value="3">April</option>
	                                            <option value="4">May</option>
	                                            <option value="5">June</option>
	                                            <option value="6">July</option>
	                                            <option value="7">August</option>
	                                            <option value="8">September</option>
	                                            <option value="9">October</option>
	                                            <option value="10">November</option>
	                                            <option value="11" selected>December</option>
	                                        </select>
	                                    </li>
	                                    <li class="is-field x-small">
	                                        <select data-element="Com.Select" name="year">
	                                            <option value="2017">2017</option>
	                                            <option value="2016" selected>2016</option>
	                                            <option value="2015">2015</option>
	                                            <option value="2014">2014</option>
	                                        </select>
	                                    </li>
	                                    <li>
	                                        <div class="button" data-node="next">&gt;</div>
	                                    </li>
	                                </ul>
	                            </div>
				                <div class="right">
				                    <ul class="group is-adaptive">
				                        <li class="is-field large">
				                            <div class="form-field has-icon-right">
				                                <input type="text" placeholder="Search" name="search" data-node="search-input">
				                                <div class="icon small search linked" title="Search" data-node="search-button"></div>
				                            </div>
				                        </li>
				                    </ul>
				                </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="calendar__table">
	                    <table>
	                        <thead>
	                            <tr>
	                                <th>Sun</th>
	                                <th>Mon</th>
	                                <th>Tue</th>
	                                <th>Wed</th>
	                                <th>Thu</th>
	                                <th>Fri</th>
	                                <th>Sat</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                                <td class="inactive weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">31</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">1</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">2</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                <td class="default today" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">3</div>
	                                            </div>
	                                            <div class="calendar__events-holder" data-node="events-holder">
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 3, 2016 20:00", "title" : "Some event text", "description" : "Some very long event text description, that displays in tooltip popup.", "url" : "http://quicksilk.com"}}\'>
	                                                    <div class="label">Some event text</div>
	                                                </div>
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">Some event text</div>
	                                                </div>
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">Some event text</div>
	                                                </div>
	                                            </div>
	                                            <div class="calendar__more" data-node="more">
	                                                <div class="label">
	                                                    <a data-node="more-button">+5 more</a>
	                                                </div>
	                                            </div>
	                                            <div class="calendar__more-holder" data-node="more-holder">
	                                                <div class="inner">
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">Some event text</div>
	                                                    </div>
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">Some event text</div>
	                                                    </div>
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">Some event text</div>
	                                                    </div>
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">
	                                                            <div class="time">12:45</div>
	                                                            <div class="title">Some event text</div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">
	                                                            <div class="time">13:00</div>
	                                                            <div class="title">Some event very long text description</div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">
	                                                            <div class="time">14:45</div>
	                                                            <div class="title">Some event text</div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">
	                                                            <div class="time">15:00</div>
	                                                            <div class="title">Some event very long text description</div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                        <div class="label">
	                                                            <div class="time">17:30</div>
	                                                            <div class="title">Some event very long text description</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">4</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">5</div>
	                                            </div>
	                                            <div class="calendar__events-holder" data-node="events-holder">
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">Some event text</div>
	                                                </div>
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">Some event text</div>
	                                                </div>
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">
	                                                        <div class="time">12:45</div>
	                                                        <div class="title">Some event text</div>
	                                                    </div>
	                                                </div>
	                                                <div class="com__calendar-event is-short" data-element="Com.CalendarEvent" data-config=\'{"data" : {"date" : "February 5, 2016 20:00", "title" : "Some event text", "description" : "Some event text"}}\'>
	                                                    <div class="label">
	                                                        <div class="time">13:00</div>
	                                                        <div class="title">Some event very long text description</div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">6</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                            <tr>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">7</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">8</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">9</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">10</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">11</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">12</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">13</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                            <tr>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">14</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">15</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">16</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="calendar__dayname">
	                                            <div class="label">17</div>
	                                        </div>
	                                        <div class="com__calendar-events"></div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">18</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">19</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">20</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                            <tr>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">21</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">22</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">23</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">24</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">25</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">26</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">27</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                            <tr>
	                                 <td class="default weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">28</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="default" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">29</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">1</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">2</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">3</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">4</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">5</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                            <tr>
	                                 <td class="inactive weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">6</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">7</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">8</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">9</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">10</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">11</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                                 <td class="inactive weekend" data-node="days:[]:container">
	                                    <div class="calendar__day" data-node="day">
	                                        <div class="inner" data-node="inner">
	                                            <div class="calendar__dayname">
	                                                <div class="label">12</div>
	                                            </div>
	                                            <div class="com__calendar-events"></div>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </div>
	            </div>';
		break;
}

$response = json_encode(array(
	'data' =>  $data
));

echo $response;