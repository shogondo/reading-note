from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def index(request):
    params = {
        'title': 'Hello/Index',
        'msg': 'これは、サンプルで作ったページです。'
    }
    return render(request, 'hello/index.html', params)
