# Logger Laravel
This is custom Laravel Log based on DDD. You can track the unique Id Request using:

```
session()->getId()
```

You must be add the Infrastructure Service Provider in the _config/app.php_:

```
.
.
.
    //Infrastructure service provider
    App\Providers\InfrastructureServiceProvider::class
.
.
.
```

The output will be:

![alt text](https://github.com/jonathansanchez/LoggerLaravel/blob/master/AwesomeLog.png)
