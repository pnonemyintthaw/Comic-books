@extends('frontend')

@section('content')

<div class="container mt-5 ">

	<div class="row">

		<div class="col-md-6">
			<img src="{{$books->photo}}" class="img-fluid">
		</div>

		<div class="col-md-6">
			<div class="card">

				<div class="card-header">
					<h4>{{$books->name}}</h4>
				</div>

				<div class="card-body">

					<div class="text-center">Written by : {{$books->author->name}}</div>
					<div class="text-center">Series :{{$books->series}}</div>
					<div class="text-center">Published : {{$books->published}}</div>

					<?php if($books->discount > 0):?>
					<del><div class="text-center">Price : {{$books->price}}MMK</div></del>
					<div class="text-center">Discount : {{$books->discount}}MMK</div></h5>
					<?php else: ?>

					<div class="text-center">Price : {{$books->price}}MMK</div>

					<?php endif ?>
					<div class="text-center">Pages : {{$books->page}}</div>

					<p class="card-text mt-3">{{$books->description}}</p>
				</div>

				<?php
				$id = $books['id'];
				$name = $books['name'];
				$price = $books['price'];
				$discount = $books['discount'];
				$photo = $books['photo'];

				?>

				<div class="card-footer">
					<?php if($books->price > 0):?>
					<a href="" class="btn btn-success addtocartBtn" data-id="<?= $id;?>" data-name="<?= $name;?>" data-photo="<?= $photo;?>" data-price="<?= $price;?>" data-discount="<?= $discount;?>">Add to cart</a>
					<?php else: ?>
					<a href="{{route('freebook',$books->id)}}" class="btn btn-success">Read</a>
					<?php endif ?>
				</div>


			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
    <script type="text/javascript" src="{{asset('frontend_asset/js/custom.js')}}"></script>
@endsection