<!DOCTYPE html>
<html>

<head>
	<title>Fusion - UI Documentation</title>
	<!--Import Google Icon Font-->
	<!-- link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	 <link href="fonts/materialfont/material-icons.css" rel="stylesheet"/>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="fonts/font-awesome-4.6.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
	<link href="css/fusion_style.min.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> </head>

<body>

	<!-- modal for personal details -->
		<div id="personal" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Personal details</b></h5></center>
			<form method="POST" action="/fac/upd">
			   <input type="hidden" name="_token" value="{{ csrf_token() }}">
									@foreach($Faculty as $f)
									<div class="input-field col s6">
									<textarea name="name" id="name" class="materialize-textarea" required="true" contenteditable="false" readonly> {{$f->name}} </textarea>
									<label for="course">Name</label>
									</div>
									<div class="input-field col s6">
									<textarea name="sex" id="sex" class="materialize-textarea" required="true" readonly> {{$f->sex}}</textarea>
									<label for="sex">Sex</label>
									</div>
									<div class="input-field col s6">
									<textarea name="address" id="address" class="materialize-textarea" required="true"> {{$f->address}}</textarea>
									<label for="address">Address</label>
									</div>
									<div class="input-field col s6">
									<textarea name="email" id="email" class="materialize-textarea" required="true"> {{$f->email}}</textarea>
									<label for="email">Email</label>
									</div>
									<div class="input-field col s6">
									<textarea name="department" id="department" class="materialize-textarea" required="true"> {{$f->department}}</textarea>
									<label for="department">Department</label>
									</div>
									<div class="input-field col s6">
									<textarea name="mobile_no" id="mobile_no" class="materialize-textarea" required="true"> {{$f->mobile_no}}</textarea>
									<label for="mobile_no">Mobile No.</label>
									</div>
									<div class="input-field col s6">
									<textarea name="DOB" id="DOB" class="materialize-textarea" required="true" readonly> {{$f->DOB}}</textarea>
									<label for="DOB">Date of Birth</label>
									</div>
									<div class="input-field col s6">
									<textarea name="blood_group" id="bloodgroup" class="materialize-textarea" required="true" readonly> {{$f->blood_group}}</textarea>
									<label for="bloodgroup">Bloodgroup</label>
									</div>
									<div class="input-field col s6">
									<textarea name="alternate_email" id="alternate_email" class="materialize-textarea" required="true"> {{$f->alternate_email}}</textarea>
									<label for="alternate_email">Alternate Email</label>
									</div>
									<div class="input-field col s6">
									<textarea name="designation" id="designation" class="materialize-textarea" required="true"> {{$f->designation}}</textarea>
									<label for="designation">Designation</label>
									</div>
									<div class="input-field col s6">
									<textarea name="about_me" id="about_me" class="materialize-textarea" required="true" > {{$f->about_me}}</textarea>
									<label for="about_me">About Me</label>
									</div>
									Start Date
									<div class="input-field col s6">
									<input type="date" id="start_date" name="start_date" value="{{$f->start_date}}" required="true" readonly>
									<label for="start_date"></label>
									</div>
									End Date
									<div class="input-field col s6">
									<input type="date" id="end_date" name="end_date" value="{{$f->end_date}}" required="true">
									<label for="end_date"></label>
									</div>
									<!--<form>
										<div class="file-field input-field">
											<div class="btn"> <span>Upload</span>
												<input type="file"> </div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text" name="photo_url"> </div>
										</div>
									</form>
									<form>
										<div class="file-field input-field">
											<div class="btn"> <span>Upload</span>
												<input type="file"> </div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text" name="signature_url"> </div>
										</div>
									</form>-->
									@endforeach
										
				<button type="submit" class="btn">Save</button>
				<div class="modal-action modal-close waves-effect waves-green btn ">Cancel </div>
				<!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn ">Save</a>
	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> -->
	 		</form>
		</div>
	</div>
	</div>
	
	
	<!-- modal for qualification -->
	<div id="qualification" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter qualification details</b></h5></center>
			<form method="POST" action="/fac/add">
			   <input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="input-field col s6">
									<textarea name="course" id="course" class="materialize-textarea" required="true"></textarea>
									<label for="course">Degree</label>
									</div>
									<div class="input-field col s6">
									<textarea name="institute" id="university_name" class="materialize-textarea" required="true"></textarea>
									<label for="university_name">Name of the University</label>
									</div>
									<div class="input-field col s6">
									<textarea name="year" id="doj" class="materialize-textarea" required="true"></textarea>
									<label for="doj">Year</label>
									</div>
									
									<div class="input-field col s6">
									<textarea name="cgpa" id="cgpa" class="materialize-textarea" required="true"></textarea>
									<label for="cgpa">CGPA</label>
									</div>
							
				<button type="submit" class="btn">Save</button>
				<div class="modal-action modal-close waves-effect waves-green btn ">Cancel </div>
			</form>
				<!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn ">Save</a>
	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> -->
		</div>
	</div>
	
	<!-- modal for update qual -->
	@foreach($qualifications as $q)
	<div id="upd_qualification{{$q->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter qualification details</b></h5></center>
			<form method="POST" action="/fac/qupd/{{$q->id}}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="qid" value="{{$q->id}}">
					<div class="input-field col s6">
					<textarea name="course" id="course" class="materialize-textarea" >{{$q->course}}</textarea>
					<label for="course">Degree</label>
					</div>
					<div class="input-field col s6">
					<textarea name="institute" id="university_name" class="materialize-textarea">{{$q->institute}}</textarea>
					<label for="university_name">Name of the University</label>
					</div>
					<div class="input-field col s6">
					<textarea name="year" id="doj" class="materialize-textarea">{{$q->year}}</textarea>
					<label for="doj">Year</label>
					</div>
					
					<div class="input-field col s6">
					<textarea name="cgpa" id="cgpa" class="materialize-textarea">{{$q->cgpa}}</textarea>
					<label for="cgpa">CGPA</label>
					</div>
			
				<button type="submit" class="btn">Update</button>
				<div class="modal-action modal-close waves-effect waves-green btn ">Cancel </div>
			</form>
				<!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn ">Save</a>
	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> -->
		</div>
	</div>
	@endforeach
	
	
	
	<!-- modal for experience -->
	<div id="experience" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Experience details</b></h5></center><br>
			<form method="POST" action="addexp">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="input-field col s6">
									<textarea name="details" class="materialize-textarea" required="true"></textarea>
									<label for="experience_details">Brief details</label>
								</div>
								
								<button type="submit" class="btn">Save</button> 
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
			</form>
		</div>
	</div>
	
								
	<!-- modal for update experience -->
	@foreach($experiences as $e)
	<div id="upexp{{$e->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Experience details</b></h5></center><br>
			<form method="POST" action="/fac/eupd/{{$e->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="qid" value="{{$e->id}}">
								<div class="input-field col s6">
									<textarea name="details" class="materialize-textarea" required="true">{{$e->details}}</textarea>
									<label for="experience_details">Brief details</label>
								</div>
								
								<button type="submit" class="btn">Update</button> 
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
			</form>
		</div>
	</div>
	@endforeach
								
	<!-- modal for achievements -->
	<div id="achievements" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Achievements details</b></h5></center>
			<form method="POST" action="fac/achadd">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="qid" value="{{$e->id}}">
							<div class="input-field col s6">
								<textarea id="achievements" name="achievement" class="materialize-textarea" required="true"></textarea>
								<label for="achievements">Achievements</label>
							 </div>
								
							<div class="input-field col s6">
								<textarea id="achievement_details" name="a_details" class="materialize-textarea" required="true"></textarea>
								<label for="achievement_details">Brief details</label>
							</div>
						
							<div class="input-field col s6">
								<input type="date" id="doa" name="dated" required="true">
								<label for="doa"></label>
							</div>
							<button type="submit" class="btn">Save</button>  
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
			</form>
		</div>
	</div>
	
	<!-- modal for update achievements -->
	@foreach($achievements as $a)
	<div id="upach{{$a->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Achievements details</b></h5></center>
			<form method="POST" action="fac/aupd/{{$a->id}}">
			<input type="hidden" name="qid" value="{{$a->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="qid" value="{{$a->id}}">
							<div class="input-field col s6">
								<textarea id="achievements" name="achievement" class="materialize-textarea" required="true">{{$a->achievement}}</textarea>
								<label for="achievements">Achievements</label>
							 </div>
								
							<div class="input-field col s6">
								<textarea id="achievement_details" name="a_details" class="materialize-textarea" required="true">{{$a->a_details}}</textarea>
								<label for="achievement_details">Brief details</label>
							</div>
						
							<div class="input-field col s6">
								<input type="date" id="doa" name="dated" required="true" value="{{$a->dated}}">
								<label for="doa"></label>
							</div>
							<button type="submit" class="btn">Update</button>  
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
			</form>
		</div>
	</div>
	@endforeach
	
	<!-- modal for research_project -->
	<div id="research_project" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Research Project details</b></h5></center>
			<form method="POST" action="fac/rpdd">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="input-field col s6">
								<textarea id="pid" name="p_id" class="materialize-textarea" required="true"></textarea>
								<label for="pid">PI/Co-PI(pid)</label>
							    </div>
								<div class="input-field col s6">
								<textarea id="title_of_project" name="p_title" class="materialize-textarea" required="true"></textarea>
								<label for="title_of_project">Title</label>
							    </div>
							    <div class="input-field col s6">
								<textarea id="agency" name="f_agency" class="materialize-textarea" required="true"></textarea>
								<label for="agency">Name of the Agency</label>
							    </div>
							    <div class="input-field col s6">
								<textarea id="other_details" name="p_details" class="materialize-textarea" required="true"></textarea>
								<label for="other_details">Brief details</label>
							    </div>
							    <div class="input-field col s6">
								<textarea id="status" name="status" class="materialize-textarea" required="true"></textarea>
								<label for="status">Status</label>
							    </div>
								<button type="submit" class="btn">Save</button>  
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
					</form>			
			</div>
	</div>
	
	@foreach($research_proj as $re)
	<!-- modal for updatr research_project -->
	<div id="uprp{{$re->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Research Project details</b></h5></center>
			<form method="POST" action="fac/rpupd/{{$re->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="qid" value="{{$re->id}}">
								<div class="input-field col s6">
								<textarea id="pid" name="p_id" class="materialize-textarea" required="true">{{$re->p_id}}</textarea>
								<label for="pid">PI/Co-PI(pid)</label>
							    </div>
								<div class="input-field col s6">
								<textarea id="title_of_project" name="p_title" class="materialize-textarea" required="true">{{$re->p_title}}</textarea>
								<label for="title_of_project">Title</label>
							    </div>
							    <div class="input-field col s6">
								<textarea id="agency" name="f_agency" class="materialize-textarea" required="true">{{$re->f_agency}}</textarea>
								<label for="agency">Name of the Agency</label>
							    </div>
							    <div class="input-field col s6">
								<textarea id="other_details" name="p_details" class="materialize-textarea" required="true">{{$re->p_details}}</textarea>
								<label for="other_details">Brief details</label>
							    </div>
							    <div class="input-field col s6">
								<textarea id="status" name="status" class="materialize-textarea" required="true">{{$re->status}}</textarea>
								<label for="status">Status</label>
							    </div>
								<button type="submit" class="btn">update</button>  
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
					</form>			
			</div>
	</div>
	@endforeach
	
	<!-- modal for research_journal -->
	<div id="research_journal" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Research Journal details</b></h5></center>
			<form method="POST" action="/document" class="col s12" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="input-field col s6">
								<textarea id="author_name" name="author" class="materialize-textarea" required="true"></textarea>
								<label for="author_name">Author</label>
							</div>
							<div class="input-field col s6">
								<textarea id="title_of_journal" name="title" class="materialize-textarea" required="true"></textarea>
								<label for="title_of_journal">Title of the Journal</label>
							</div>
							<div class="input-field col s6">
								<textarea id="publisher" name="j_publisher" class="materialize-textarea" required="true"></textarea>
								<label for="publisher">Name of publisher</label>
							</div>
							<div class="input-field col s6">
								<textarea id="journal_details" name="journal_name" class="materialize-textarea" required="true"></textarea>
								<label for="journal_details">Journal Details</label>
							</div>
							<div class="input-field col s6">
								<input type="date" id="doa" name="pub_date" class="validate" required="true">
								<label for="doa"></label>
							</div>
									{{ csrf_field() }}
           <div class="file-field input-field">
        <div class="btn">
          <span>Document</span>
          <input type="file" name='doc_file'>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate valid" name = 'document' type="text" required>
        </div>
      </div>
							
					<button type="submit" class="btn">Save</button>  
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
				</form>
			</div>
	</div>
	<!-- modal for consultancy project-->
	<div id="consultancy" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Consultancy Project details</b></h5></center>
			<form method="POST" action="fac/cadd">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="input-field col s6">
								<textarea id="consul" name= "consultant"class="materialize-textarea" required="true"></textarea>
								<label for="consul">Consultants</label>
							</div>
							<div class="input-field col s6">
								<textarea id="title_of_cproject" name="c_title" class="materialize-textarea" required="true"></textarea>
								<label for="title_of_cproject">Title of project</label>
							</div>
							<div class="input-field col s6">
								<textarea id="client" name="client" class="materialize-textarea" required="true"></textarea>
								<label for="client">Name of client</label>
							</div>
							<div class="input-field col s6">
								<textarea id="outlay" name="financial_outlay" class="materialize-textarea" required="true"></textarea>
								<label for="outlay">Financial outlay</label>
							</div>
							<div class="input-field col s6">
								<textarea id="duration" name="duration" class="materialize-textarea" required="true"></textarea>
								<label for="duration">Duration</label>
							</div>
							<button type="submit" class="btn">Save</button>
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a>
			</form>
		</div>
	</div>
	
	@foreach($cons_projs as $c)
	<!-- modal for update consultancy project-->
	<div id="cupd{{$c->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Consultancy Project details</b></h5></center>
			<form method="POST" action="fac/cupd/{{$c->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="qid" value="{{$c->id}}">
							<div class="input-field col s6">
								<textarea id="consul" name= "consultant"class="materialize-textarea" required="true">{{$c->consultant}}</textarea>
								<label for="consul">Consultants</label>
							</div>
							<div class="input-field col s6">
								<textarea id="title_of_cproject" name="c_title" class="materialize-textarea" required="true">{{$c->c_title}}</textarea>
								<label for="title_of_cproject">Title of project</label>
							</div>
							<div class="input-field col s6">
								<textarea id="client" name="client" class="materialize-textarea" required="true">{{$c->client}}</textarea>
								<label for="client">Name of client</label>
							</div>
							<div class="input-field col s6">
								<textarea id="outlay" name="financial_outlay" class="materialize-textarea" required="true">{{$c->financial_outlay}}</textarea>
								<label for="outlay">Financial outlay</label>
							</div>
							<div class="input-field col s6">
								<textarea id="duration" name="duration" class="materialize-textarea" required="true">{{$c->duration}}</textarea>
								<label for="duration">Duration</label>
							</div>
							<button type="submit" class="btn">update</button>
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a>
			</form>
		</div>
	</div>
	@endforeach
	
	<!-- modal for patents -->
	<div id="patents" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Patent details</b></h5></center>
			<form method="POST" action="fac/padd">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
							<div class="input-field col s6">
								<textarea id="patent_no" name="p_no" class="materialize-textarea" required="true"></textarea>
								<label for="patent_no">Patent Number</label>
							</div>
							<div class="input-field col s6">
								<textarea id="title_of_patent" name="pt_title" class="materialize-textarea" required="true"></textarea>
								<label for="title_of_patent">Title of patent</label>
							</div>
							<div class="input-field col s6">
								<textarea id="earnings" name="earnings" class="materialize-textarea" required="true"></textarea>
								<label for="earnings">Earnings in Rupees</label>
							</div>
							<div class="input-field col s6">
								<textarea id="pstatus" name="pt_status" class="materialize-textarea" required="true"></textarea>
								<label for="pstatus">Status</label>
							</div>
							<div class="input-field col s6">
								<textarea id="pyear" name="pt_year" class="materialize-textarea" required="true"></textarea>
								<label for="pyear">Year</label>
							</div>
						
							<button type="submit" class="btn">Save</button>
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a>
			</form>
		</div>
	</div>
	
	
	
	<!-- modal for update patents -->
	@foreach($patents as $p)
	<div id="pupd{{$p->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Patent details</b></h5></center>
			<form method="POST" action="fac/pupd/{{$p->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="qid" value="{{$p->id}}">
			
							<div class="input-field col s6">
								<textarea id="patent_no" name="p_no" class="materialize-textarea" required="true">{{$p->p_no}}</textarea>
								<label for="patent_no">Patent Number</label>
							</div>
							<div class="input-field col s6">
								<textarea id="title_of_patent" name="pt_title" class="materialize-textarea" required="true">{{$p->pt_title}}</textarea>
								<label for="title_of_patent">Title of patent</label>
							</div>
							<div class="input-field col s6">
								<textarea id="earnings" name="earnings" class="materialize-textarea" required="true">{{$p->earnings}}</textarea>
								<label for="earnings">Earnings in Rupees</label>
							</div>
							<div class="input-field col s6">
								<textarea id="pstatus" name="pt_status" class="materialize-textarea" required="true">{{$p->pt_status}}</textarea>
								<label for="pstatus">Status</label>
							</div>
							<div class="input-field col s6">
								<textarea id="pyear" name="pt_year" class="materialize-textarea" required="true">{{$p->pt_year}}</textarea>
								<label for="pyear">Year</label>
							</div>
						
							<button type="submit" class="btn">update</button>
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a>
			</form>
		</div>
	</div>
	@endforeach
	
	<!-- modal for publications -->
	
	<div id="publications" class="modal modal-fixed-footer">
		<div class="modal-content">
		<center><h5><b>Enter Publication details (Books/ Monographs/ Book Chapter/ Handbooks)</b></h5></center>
		<form method="POST" action="fac/pubadd">									<!-- 1 -->
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
							<div class="input-field col s6">
								<textarea id="title_of_publication" name="pub_title" class="materialize-textarea" required="true"></textarea>
								<label for="title_of_publication">Title of the Publication</label>
							</div>
							<div class="input-field col s6">
								<textarea id="ppublisher" name="pub_publisher" class="materialize-textarea" required="true"></textarea>
								<label for="ppublisher">Name of Publisher</label>
							</div>
							<div class="input-field col s6">
								<textarea id="pcpublisher" name="pub_copublisher" class="materialize-textarea" required="true"></textarea>
								<label for="pcpublisher">Name of Co-Publisher</label>
							</div>
							<div class="input-field col s6">
								<textarea id="publyear" name="pub_year" class="materialize-textarea" required="true"></textarea>
								<label for="publyear">Year</label>
							</div>
							
					<button type="submit" class="btn">Save</button> 					<!--change this line to button -->
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
				</form>	
		</div>
	</div>
	
	
	<!-- modal for update publications -->
	@foreach($publications as $p)
	<div id="pubupd{{$p->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
		<center><h5><b>Enter Publication details (Books/ Monographs/ Book Chapter/ Handbooks)</b></h5></center>
		<form method="POST" action="fac/pubupd/{{$p->id}}">									<!-- 1 -->
				<input type="hidden" name="_token" value="{{ csrf_token() }}">   
				<input type="hidden" name="qid" value="{{$p->id}}">
							<div class="input-field col s6">
								<textarea id="title_of_publication" name="pub_title" class="materialize-textarea" required="true">{{$p->pub_title}}</textarea>
								<label for="title_of_publication">Title of the Publication</label>
							</div>
							<div class="input-field col s6">
								<textarea id="ppublisher" name="pub_publisher" class="materialize-textarea" required="true">{{$p->pub_publisher}}</textarea>
								<label for="ppublisher">Name of Publisher</label>
							</div>
							<div class="input-field col s6">
								<textarea id="pcpublisher" name="pub_copublisher" class="materialize-textarea" required="true">{{$p->pub_copublisher}}</textarea>
								<label for="pcpublisher">Name of Co-Publisher</label>
							</div>
							<div class="input-field col s6">
								<textarea id="publyear" name="pub_year" class="materialize-textarea" required="true">{{$p->pub_year}}</textarea>
								<label for="publyear">Year</label>
							</div>
							
					<button type="submit" class="btn">update</button> 					<!--change this line to button -->
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> 
				</form>	
		</div>
	</div>
	@endforeach
	
	
	<!-- modal for thesis -->
	<div id="thesis" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Thesis details</b></h5></center>
			<form method="POST" action="fac/theadd">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="input-field col s6">
								<textarea id="title_of_thesis"  name="t_title" class="materialize-textarea" required="true"></textarea>
								<label for="title_of_thesis">Title of thesis</label>
						</div>
						<div class="input-field col s6">
								<textarea id="student_details"  name="stu1_name" class="materialize-textarea" required="true"></textarea>
								<label for="student_details">Student Details</label>
						</div>
						<div class="input-field col s6">
								<textarea id="supervisor"  name="t_supervisors" class="materialize-textarea" required="true"></textarea>
								<label for="supervisor">Name of Supervisors</label>
						</div>
						<div class="input-field col s6">
								<textarea id="tyear"  name="t_year" class="materialize-textarea" required="true"></textarea>
								<label for="tyear">Year</label>
						</div>
						 <button type="submit" class="btn">Save</button>		<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> </form>	</div>
	</div>
	
	
	<!-- modal for update thesis -->
	@foreach($thesis as $p)
	<div id="tupd{{$p->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Thesis details</b></h5></center>
			<form method="POST" action="fac/tupd/{{$p->id}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="qid" value="{{$p->id}}">
						<div class="input-field col s6">
								<textarea id="title_of_thesis"  name="t_title" class="materialize-textarea" required="true">{{$p->t_title}}</textarea>
								<label for="title_of_thesis">Title of thesis</label>
						</div>
						<div class="input-field col s6">
								<textarea id="student_details"  name="stu1_name" class="materialize-textarea" required="true">{{$p->stu1_name}}</textarea>
								<label for="student_details">Student Details</label>
						</div>
						<div class="input-field col s6">
								<textarea id="supervisor"  name="t_supervisors" class="materialize-textarea" required="true">{{$p->t_supervisors}}</textarea>
								<label for="supervisor">Name of Supervisors</label>
						</div>
						<div class="input-field col s6">
								<textarea id="tyear"  name="t_year" class="materialize-textarea" required="true">{{$p->t_year}}</textarea>
								<label for="tyear">Year</label>
						</div>
						 <button type="submit" class="btn">update</button>		<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> </form>	</div>
	</div>
	@endforeach 
	
	<!-- modal for lectures -->
	<div id="lectures" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Lectures details</b></h5></center>
			<form method="POST" action="fac/lecadd">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
							<div class="input-field col s6">
								<textarea id="ltitle" name="l_title" class="materialize-textarea" required="true"></textarea>
								<label for="ltitle">Title</label>
							</div>
							<div class="input-field col s6">
								<textarea id="lplace" name="l_place" class="materialize-textarea" required="true"></textarea>
								<label for="lplace">Place</label>
							</div>
							<div class="input-field col s6">
								<textarea id="lyear" name="l_year" class="materialize-textarea" required="true"></textarea>
								<label for="lyear">Year</label>
							</div>
						<button type="submit" class="btn">save</button> <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> </form></div>
	</div>
	
	
	<!-- modal for update lectures -->
	@foreach($lectures as $l)
	<div id="lupd{{$l->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Lectures details</b></h5></center>
			<form method="POST" action="fac/lupd/{{$l->id}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="qid" value="{{$l->id}}">
							<div class="input-field col s6">
								<textarea id="ltitle" name="l_title" class="materialize-textarea" required="true">{{$l->l_title}}</textarea>
								<label for="ltitle">Title</label>
							</div>
							<div class="input-field col s6">
								<textarea id="lplace" name="l_place" class="materialize-textarea" required="true">{{$l->l_place}}</textarea>
								<label for="lplace">Place</label>
							</div>
							<div class="input-field col s6">
								<textarea id="lyear" name="l_year" class="materialize-textarea" required="true">{{$l->l_year}}</textarea>
								<label for="lyear">Year</label>
							</div>
						<button type="submit" class="btn">update</button> <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> </form></div>
	</div>
	@endforeach
	
	<!-- modal for keynote -->
	<div id="keynote" class="modal modal-fixed-footer">
		<div class="modal-content">
		<center><h5><b>Enter keynote/plenary address/talks details</b></h5></center>
							<div class="input-field col s6">
								<textarea id="ktitle" class="materialize-textarea" required="true"></textarea>
								<label for="ktitle">Title</label>
							</div>
							<div class="input-field col s6">
								<textarea id="keynote_details" class="materialize-textarea" required="true"></textarea>
								<label for="keynote_details">Details</label>
							</div>	
							<div class="input-field col s6">
								<textarea id="kplace" class="materialize-textarea" required="true"></textarea>
								<label for="kplace">Place</label>
							</div>
							<div class="input-field col s6">
								<textarea id="kyear" class="materialize-textarea" required="true"></textarea>
								<label for="kyear">Year</label>
							</div>
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn ">Save</a> <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> </div>
	</div>
	
	<!-- modal for Foriegn_visits -->
	<div id="foriegn_visits" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Foreign visits details</b></h5></center>
			<form method="POST" action="fac/vadd">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="input-field col s6">
								<textarea id="country" name="fv_country" class="materialize-textarea" required="true"></textarea>
								<label for="country">Name of Country</label>
							</div>
							<div class="input-field col s6">
								<textarea id="fvplace" name="fv_place" class="materialize-textarea" required="true"></textarea>
								<label for="fvplace">Place</label>
							</div>
							<div class="input-field col s6">
								<textarea id="fpurpose"name="fv_purpose" class="materialize-textarea" required="true"></textarea>
								<label for="fpurpose">Purpose</label>
							</div>
							<div class="input-field col s6">
								<input type="date" name="fv_date" id="fvyear" required="true">
								<label for="fvyear"></label>
							</div>
						<button type="submit" class="btn">Save</button> 
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> </form></div>
	</div>
	
	<!-- modal for update Foriegn_visits -->
	@foreach($visits as $v)
	<div id="vupd{{$v->id}}" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Enter Foreign visits details</b></h5></center>
			<form method="POST" action="fac/vupd/{{$v->id}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="qid" value="{{$v->id}}">

							<div class="input-field col s6">
								<textarea id="country" name="fv_country" class="materialize-textarea" required="true">{{$v->fv_country}}</textarea>
								<label for="country">Name of Country</label>
							</div>
							<div class="input-field col s6">
								<textarea id="fvplace" name="fv_place" class="materialize-textarea" required="true">{{$v->fv_place}}</textarea>
								<label for="fvplace">Place</label>
							</div>
							<div class="input-field col s6">
								<textarea id="fpurpose"name="fv_purpose" class="materialize-textarea" required="true">{{$v->fv_purpose}}</textarea>
								<label for="fpurpose">Purpose</label>
							</div>
							<div class="input-field col s6">
								<input type="date" name="fv_date" id="fvyear" required="true" value="{{$v->fv_date}}">
								<label for="fvyear"></label>
							</div>
						<button type="submit" class="btn">update</button> 
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cancel</a> </form></div>
	</div>
	@endforeach
	
	<div id="upload_pic" class="modal modal-fixed-footer">
		<div class="modal-content">
			<center><h5><b>Upload Image</b></h5></center>
		   <form action="/image_upload" method='post' class="col s12" enctype="multipart/form-data"">
      		{{ csrf_field() }}
           <div class="file-field input-field">
        <div class="btn">
          <span>upload</span>
          <input type="file" name='doc_file'>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate valid" name ='photo_url' type="text" required>
        </div>
		</div>
		<center><button type="submit" class="primary btn">Save</button></center>
		</form>
		</div>
	</div>
	
	<header>
		<nav>
			<div class="nav-wrapper"> <a href="#!" class="brand-logo">Fusion</a> <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#">Change Password</a>
					</li>
					<li><a href="/logout">Logout</a>
					</li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Link</a>
					</li>
					<li><a href="#">Link</a>
					</li>
					<li><a href="#">Link</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="sidebar">
		<ul id="slide-out" class="side-nav fixed">
                <li><a href="/dashboard" class="waves-effect">Dashboard</a></li>
                <li><a href="#!" class="waves-effect">Second Link</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link</a></li>
        </ul>
		
			
		</ul> -->
	</div>
	<div class="main-container row" style="background: none; border: none;">
		
		<div class="col s12 m10 l8 offset-l1 offset-s1 offset-m1">
		<br>
			<div class="card-panel blue-grey lighten-5 z-depth-5">
				<!-- <div class="col hide-on-small-only m3 l2">
				      <ul class="section table-of-contents">
				        <li><a href="#introduction">Introduction</a></li>
				        <li><a href="#structure">Structure</a></li>
				        <li><a href="#initialization">Intialization</a></li>
				      </ul>
   				</div> -->
				
				
				
				
				
				
				
				<div class="row valign-wrapper">
					<div id="perso" class="section scrollspy">
					<!-- <div class="col s4"> --><span class="black-text">@foreach($Faculty as $f)
		                <h5 style="color:#0077B5" ><b>{{$f->name}}</b></h5>@endforeach<div><span></span> </div>
		                <p style="font-size: 18px">
						
		                @foreach($Faculty as $f)
							Faculty id: {{$f->faculty_id }} <br>
							Name: {{$f->name }}<br>
							Designation: {{$f->designation}}<br>
							Address: {{$f->address}}<br>
							Email: {{$f->email}}<br>
							Department: {{$f->department}}<br>
							Mobile: {{$f->mobile_no}}<br>
							
							Date of Birth: {{$f->DOB}}<br>
							About Me: {{$f->about_me}}<br>
							Start Date: {{$f->start_date}}<br>
							End Date: {{$f->end_date}}<br>
							
						@endforeach
						
						
						<br><a class="modal-trigger" href="#personal"><h6 style="color:#0077B5"> Edit Details </h6></a>
		                </p>
		                
		              </span>
					<!-- </div> -->
					</div>
					<div class="col l4 s12 offset-l4">
					<?php
					foreach ($Faculty as $f){
						$pic=$f->photo_url;
						echo '<div class="hovereffect"><img class="hide-on-small-only z-depth-2 img-responsive" id="pro_pic" src="upload_img/'.$pic.'"height=200 width=200 style="margin: 0 auto;" alt="Upload your Image">';
							echo '<div class="overlay">
          
           <a class="info modal-trigger" href="#upload_pic">Upload Picture</a>
        </div></div>';
						
						
					}?>
					</div>	
				</div>
				

				<div class="divider col s12"></div> <span class="black-text">
				  <div  id="quali" class="section scrollspy">
		          <div class ="row">
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Qualification</b></h5>
		          </div>
		          	
		          </div>
		          	
		                <table class="responsive-table" style="border:none"><tr><td><b>Degree</b></td>
		                <td><b>University</b></td>
		                <td><b>Year</b></td>
		                <td><b>CGPA / %</b></td></tr>
						
							
		               @foreach ($qualifications as $q)
			                <tr ><td >{{$q -> course }} </td>
			                <td>{{$q -> institute }} </td>
			                <td>{{$q -> year }} </td>
			                <td>{{$q -> cgpa }} </td>
			                <td><a class="modal-trigger" href="#upd_qualification{{$q->id}}"><span><i class="tiny material-icons">mode_edit</i></span></a> </td>
			                <td><a href="/qdel/{{$q->id}}"><span><i class="tiny material-icons">delete</i></span></a> </td></tr>
			            @endforeach 
				</table>
				<br> <a class="modal-trigger" href="#qualification"><h6 style="color:#0077B5"> + Add Qualification </h6></a>
				</div>
				</span>
				<div class="divider col s12"></div> <span class="black-text">
				  <div id="exper" class="section scrollspy" >
		          <div class ="row" >
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Experience</b></h5>
		          </div>
		          	
		          </div>
					
					
					@foreach ($experiences as $e)
			                <li style="font-size:18px">{{$e->details}} 
							<span class="right"> 
			                <a class="modal-trigger" href="#upexp{{$e->id}}"><span><i class="tiny material-icons">mode_edit</i></span></a></span>
							
							<span class="right"> 
			                <a href="/edel/{{$e->id}}"><span><i class="tiny material-icons">delete</i></span></a></span></li>
			            @endforeach 
					
		          	 <a class="modal-trigger" href="#experience"><h6 style="color:#0077B5"> + Add Experience </h6></a>
		          	 </div>
		             </span>
					 
					 
				<!----   achievements -->	 
					 
				
				<div class="divider col s12"></div> <span class="black-text">
				  <div  id="achie" class="section scrollspy">
		          <div class ="row">
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Achievements</b></h5>
		          </div>
		          	
		          </div>
					
						@foreach($achievements as $ac)
						<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
							  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $ac->achievement }}</div>
							  <div class="collapsible-body"><p>{{$ac->a_details}} <br><br><br>Dated {{$ac->dated}}</p><div class="right-align"> <a class="modal-trigger" href="#upach{{$ac->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/acdel/{{$ac->id}}"><span><i class="small material-icons">delete</i></span></a></div></div>
							</li>
						 </ul>
						@endforeach
		          	
		             <a class="modal-trigger" href="#achievements"><h6 style="color:#0077B5"> <br>+ Add Achievements </h6></a>
		          </div> 
		             </span>
					 
				<!-- end of achievements -->

				<!--  research projects -->
					 
				<div class="divider col s12"></div> <span class="black-text">
				  <div  id="resep" class="section scrollspy">
		          <div class ="row">
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Research project</b></h5>
		          </div>
		          	
		          </div>
				  
						@foreach($research_proj as $re)
						<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
							  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $re->p_title }}</div>
							  <div class="collapsible-body">
									<p>Project id: {{$re->p_id}}<br><br><br> {{$re->p_details}} <br><br><br> Funding Agency: {{$re->f_agency}} <br><br> Status: {{$re->status}} </p>
									</p><div class="right-align"><a class="modal-trigger" href="#uprp{{$re->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/rpdel/{{$re->id}}"><span><i class="small material-icons">delete</i></span></a></div>
							  </div>
							</li>
						 </ul>
						@endforeach
		          	
		             <a class="modal-trigger" href="#research_project"><h6 style="color:#0077B5"> + Add Reasearch project </h6></a>
		             </div>
		             </span>
				<!-- end of research projects --> 
					 
					 
				<!-- research journals -->	 
				<div class="divider col s12"></div> <span class="black-text">
				<div id="resej" class="section scrollspy">
		          <div class ="row" >
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Research journal</b></h5>
		          </div>
		          	
		          </div>
				  
					@foreach($research_jour as $rj)
						<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
							  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $rj->title }}</div>
							  <div class="collapsible-body">
									<p>Author: {{$rj->author}}<br><br>Journal Details: {{$rj->journal_name}} <br><br>
									Publisher: {{$rj->j_publisher}} <br><br> Publication Date: {{$rj->pub_date}} </p><br><br>
									<a href="/documents/{{ $rj->rjpath }}" stream>{{$rj -> rjpath }}</a></td> </p>
									</p><div class="right-align"><a href="/rjdel/{{$rj->id}}"><span><i class="small material-icons">delete</i></span></a></div>
							  </div>
							</li>
						 </ul>
						@endforeach
		          	
		             <a class="modal-trigger" href="#research_journal"><h6 style="color:#0077B5"> + Add Research journal </h6></a>
		             </div>
		             </span>
				<!--end of research journals-->
				
				
				<!--consultancy projects -->
				<div class="divider col s12"></div> <span class="black-text">
				  <div id="consu" class="section scrollspy">
		          <div class ="row" >
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Consultancy_project</b></h5>
		          </div>
				  </div>
						@foreach($cons_projs as $cp)
							<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
								  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $cp->c_title }}</div>
								  <div class="collapsible-body">
										<p>Consultant: {{$cp->consultant}}<br><br>Client: {{$cp->client}} <br><br>
										Financial Outlay: {{$cp->financial_outlay}} <br><br> Duration: {{$cp->duration}} </p>
										</p><div class="right-align"><a class="modal-trigger" href="#cupd{{$cp->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/cdel/{{$cp->id}}"><span><i class="small material-icons">delete</i></span></a></div>
								  </div>
							</li>
							 </ul>
						@endforeach			  
	             <a class="modal-trigger" href="#consultancy"><h6 style="color:#0077B5"> + Add Consultancy project </h6></a>
		             </div>
		             </span>
					 
					 
				<!-- patents -->
				<div class="divider col s12"></div> <span class="black-text">
				  <div  id="paten" class="section scrollspy">
		          <div class ="row">
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Patents</b></h5>
		          </div>
		          </div>
					@foreach($patents as $p)
							<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
								  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $p->pt_title }}</div>
								  <div class="collapsible-body">
										<p>Patent number: {{$p->p_no}}<br><br>Earnings: {{$p->earnings}} <br><br>
										Status: {{$p->pt_status}} <br><br> Year: {{$p->pt_year}} </p>
										</p><div class="right-align"><a class="modal-trigger" href="#pupd{{$p->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/pdel/{{$p->id}}"><span><i class="small material-icons">delete</i></span></a></div>
								  </div>
							</li>
							 </ul>
						@endforeach		
						
		          	
		             <a class="modal-trigger" href="#patents"><h6 style="color:#0077B5"> + Add Patents </h6></a>
		             </div>
		             </span>
				<div class="divider col s12"></div> <span class="black-text">
				  <div id="publi" class="section scrollspy">
		          <div class ="row" >
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Publication</b></h5>
		          </div>	
		          </div>
		          	@foreach($publications as $pu)
							<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
								  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $pu->pub_title }}</div>
								  <div class="collapsible-body">
										<p>Publisher: {{$pu->pub_publisher}}<br><br>Co-Publisher: {{$pu->pub_copublisher}} <br><br>
										Year: {{$pu->pub_year}} </p>
										</p><div class="right-align"><a class="modal-trigger" href="#pubupd{{$pu->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/pubdel/{{$pu->id}}"><span><i class="small material-icons">delete</i></span></a></div>
								  </div>
							</li>
							 </ul>
						@endforeach	
		             <a class="modal-trigger" href="#publications"><h6 style="color:#0077B5"> + Add Publication </h6></a>
		             </div>
		             </span>
				<div class="divider col s12"></div> <span class="black-text">
				<div id="thesi" class="section scrollspy">
		          <div class ="row" >
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Thesis</b></h5>
		          </div>
						
		          </div>
							@foreach($thesis as $t)
							<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
								  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $t->t_title }}</div>
								  <div class="collapsible-body">
										<p>Title: {{$t->t_title}}<br><br>student name: {{$t->stu1_name}} <br><br>
										supervisors: {{$t->t_supervisors}} <br><br> Year: {{$t->t_year}} </p>
										</p><div class="right-align"><a class="modal-trigger" href="#tupd{{$t->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/pdel/{{$t->id}}"><span><i class="small material-icons">delete</i></span></a></div>
								  </div>
							</li>
							 </ul>
						@endforeach		
					
		             <a class="modal-trigger" href="#thesis"><h6 style="color:#0077B5"> + Add Thesis </h6></a>
		            </div>
		             </span>
				
				<div class="divider col s12"></div> <span class="black-text">
				<div  id="lectu" class="section scrollspy">
		          <div class ="row">
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Lectures</b></h5>
		          </div>
		          	
		          </div>
		          	@foreach($lectures as $l)
							<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
								  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $l->l_title }}</div>
								  <div class="collapsible-body">
										<p>Place: {{$l->l_place}} <br><br>
										Year: {{$t->t_year}} </p>
										</p><div class="right-align"><a class="modal-trigger" href="#lupd{{$l->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/lecdel/{{$l->id}}"><span><i class="small material-icons">delete</i></span></a></div>
								  </div>
							</li>
							 </ul>
						@endforeach	
		             <a class="modal-trigger" href="#lectures"><h6 style="color:#0077B5"> + Add Lectures </h6></a>
		        </div>
		             </span>
				
				
				<div class="divider col s12"></div> <span class="black-text">
				<div id="forei" class="section scrollspy">
		          <div class ="row" >
		          <div class="col l3">
		          	<h5 style="color:#0077B5"><b>Visits</b></h5>
		          </div>
		          	
		          </div>
					@foreach($visits as $v)
							<ul style="box-shadow:1px 0 0 0;border-top:0; border-left:0" class="collapsible" data-collapsible="accordion">
							<li>
								  <div style="border:none" class="collapsible-header blue-grey lighten-5 z-depth-0"><i style= "color:#757575" class="material-icons">label</i>{{ $v->fv_country }}</div>
								  <div class="collapsible-body">
										<p>Purpose: {{$v->fv_purpose}} <br><br>Place: {{$v->fv_place}}<br><br>
										Date: {{$v->fv_date}} </p>
										</p><div class="right-align"><a class="modal-trigger" href="#vupd{{$v->id}}"><span><i class="small material-icons">mode_edit</i></span></a><a href="/vdel/{{$v->id}}"><span><i class="small material-icons">delete</i></span></a></div>
								  </div>
							</li>
							 </ul>
						@endforeach	
		          	
		             <a class="modal-trigger" href="#foriegn_visits"><h6 style="color:#0077B5"> + Add Visits </h6></a>
		             </div>
		             </span><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
		</div>
		<div class="col hide-on-small-only m3 l2">
			<div class="toc-wrapper pinned">
			<div style="height: 1px;">
			<ul class="section table-of-contents">
        	<li><a href="#perso" class="waves-effect">Personal Details</a>
			</li>
			<li><a href="#quali" class="waves-effect">Qualification</a>
			</li>
			<li><a href="#exper" class="waves-effect">Experience</a>
			</li>
			<li><a href="#achie" class="waves-effect">Achievements</a>
			</li>
			<li><a href="#resep" class="waves-effect">Research Project</a>
			</li>
			<li><a href="#resej" class="waves-effect">Research Journal</a>
			</li>
			<li><a href="#consu" class="waves-effect">Consultancy Projects</a>
			</li>
			<li><a href="#paten" class="waves-effect">Patents</a>
			</li>
			<li><a href="#publi" class="waves-effect">Publication</a>
			</li>
			<li><a href="#thesi" class="waves-effect">Thesis</a>
			</li>
			<li><a href="#confe" class="waves-effect">Conferences</a>
			</li>
			<li><a href="#lectu" class="waves-effect">Lectures</a>
			</li>
			
			<li><a href="#forei" class="waves-effect">Visits</a>
			</li>
				</ul>
			<a href="{{URL::to('getPDF')}}" class="waves-effect waves-light btn-large"><i class="material-icons left">system_update_alt</i>Resume</a>

			</div>
			</div>
		
		</div>

	</div> 	

	<script src="js/jquery-3.1.1.min.js"></script>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
	$(document).ready(function() {
		$('select').material_select();
		$('.modal-trigger').leanModal();
		$('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15 // Creates a dropdown of 15 years to control year
 		 });
			});
		/*$('a[href*="#"]:not([href="#"])').click(function() {
    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      	var target = $(this.hash);
      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      	}
    	}
  	});*/
		$('.scrollspy').scrollSpy();
		//$('.modal-body').html(data);
		
	</script>
</body>

</html>