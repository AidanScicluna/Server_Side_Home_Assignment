@extends('layouts.main')
@section('content')
<main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card-title">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">All cars</h2>
                <div class="ml-auto">
                  <a href="{{ route('cars.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                </div>
              </div>
            </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col">
                    <div class="input-group mb-3">
                      <select class="custom-select">
                        <option value="" selected>All cars</option>
                        <option value="1">Company One</option>
                        <option value="2">Company Two</option>
                        <option value="3">Company Three</option>
                      </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-striped table-hover">