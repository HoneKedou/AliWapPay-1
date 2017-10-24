# 支付宝 H5(WAP) 支付接口完整可行示例代码

## 使用方法

### 生称需要的公钥和私钥

```
openssl genrsa -out app_private_key.pem 1024  #生成私钥
openssl pkcs8 -topk8 -inform PEM -in app_private_key.pem -outform PEM -nocrypt -out app_private_key_pkcs8.pem #Java开发者需要将私钥转换成PKCS8格式
openssl rsa -in app_private_key.pem -pubout -out app_public_key.pem #生成公钥
```

### 获得 AppId

在 <沙箱环境>(https://openhome.alipay.com/platform/appDaily.htm) 或者正式环境的应用配置界面有

### 生成本地配置文件

```
    php -f mk.php AppId dev
    php -f mk.php AppId prod
```

### 发布公钥
    参考配置文件中的公钥发布到应用配置界面的 RSA 公钥上

## 调试
    * 访问 http://yourdomain.com/ 进行支付, 如果是测试环境请先安装沙箱版支付宝钱包
    * 访问 http://yourdomain.com/return.php?mock=1 模拟返回接口，注意需要 mock.php 必须存在且返回的数据和线上返回的一致
    * 访问 http://yourdomain.com/notify.php?mock=1 模拟通知接口，注意需要 mock.php 必须存在且返回的数据和线上返回的一致

