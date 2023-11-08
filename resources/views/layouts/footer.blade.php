<footer id="footer">
    <section>
        <form method="post" action="{{route('storeContact')}}">
            @csrf
            <div class="field">
                <label for="name">الإسم</label>
                <input type="text" name="name" id="name"  required/>
            </div>
            <div class="field">
                <label for="email">البريد الإليكتروني</label>
                <input type="email" name="email" id="email" required/>
            </div>
            <div class="field">
                <label for="message">الرسالة</label>
                <textarea name="message" id="message" rows="3" required ></textarea>
            </div>
            <ul class="actions">
                <li><input type="submit" value="إبعث رسالة" /></li>
            </ul>
        </form>
    </section>
    <section class="split contact">
        <section class="alt">
            <h3>العنوان</h3>
            <p>عمان / الأردن
                </p>
        </section>
        <section>
            <h3>الهاتف</h3>
            <p><a href="#">0788120617</a></p>
        </section>
        <section>
            <h3>البريد الإليكتروني</h3>
            <p><a href="mailto:mohammad.alhouwari.1996@gmail.com">mohammad.alhouwari.1996@gmail.com</a></p>
        </section>
        <section>
            <h3>مواقع التواصل</h3>
            <ul class="icons alt">
                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100003942219352" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.linkedin.com/in/mohammad-alhouwari-131332208/" class="icon alt fa-linkedin"><span class="label">Instagram</span></a></li>
                <li><a href="https://github.com/mohammad-alhouwari" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </section>
    </section>
</footer>

<!-- Copyright -->
<div id="copyright">
    <ul>
        <li>تنفيذ: <a href="https://www.linkedin.com/in/mohammad-alhouwari-131332208/">محمد الحواري</a></li>
        <li>التدقيق : <a href="https://github.com/mohammad-alhouwari">محمد الحواري</a></li>
        <li>&copy; حقوق النشر </li>
    </ul>
</div>

</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/skel.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
 @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'تمت العملية بنجاح',
                    text: `{{ session('success') }}`,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'حسناً'
                });
            </script>
        @endif
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'حدث خطأ',
                    text: `{{ session('error') }}`,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'حسناً'
                });
            </script>
        @endif
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
