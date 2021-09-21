<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form action="" method="POST">
        @csrf
        <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="">Select student</label>
                         <input type="text" wire:model="rfcode" class="form-control" placeholder="scan code here">
                    </div>
                    <div class="col-4">
                    <div class="mb-3">
                        <label for="">Roll</label>
                         <input type="text" class="form-control" value="{{$student->roll}}" disabled >
                    </div>
                </div> 
                <div class="col-4">
                    <div class="mb-3">
                        <label for="">Name </label>
                         <input type="text" class="form-control" value="{{$student->roll}}" disabled >
                    </div>
                </div> 
                <div class="col-4">
                    <div class="mb-3">
                        <label for="">Roll</label>
                         <input type="text" class="form-control" value="{{$student->roll}}" disabled >
                    </div>
                </div> 
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col">
                            <h5>Select Books</h5>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Book</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="book" id="" class="form-control">
                                    <option value="">Select book</option>
                                    @foreach ($books as $b)
                                        <option value="{{$b->id}}">{{$b->title}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="date" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" min="1" max="5">
                            </td>
                            <td>
                                <input type="number" class="form-control" value="0" disabled>
                            </td>
                        </tr>
                        </table>
                        <button class="btn btn-success">Add Book</button>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-danger float-end">Save</button>
                </div>
        </div>
    </form>
</div>
