<x-app-layout>
    <x-slot name="header">
        <h2>Profile</h2>
    </x-slot>

    <div style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
        <div style="display: grid; gap: 2rem;">
            <!-- Profile Information -->
            <div class="admin-card">
                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- Update Password -->
            <div class="admin-card">
                @include('profile.partials.update-password-form')
            </div>

            <!-- Delete Account -->
            <div class="admin-card">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>

    <style>
        .profile-section {
            margin-bottom: 0;
        }

        .profile-section h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffd700;
            margin-bottom: 0.5rem;
        }

        .profile-section p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        .profile-form-group {
            margin-bottom: 1.5rem;
        }

        .profile-label {
            display: block;
            color: #ffd700;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .profile-input {
            width: 100%;
            padding: 0.9rem 1.2rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 215, 0, 0.3);
            border-radius: 10px;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .profile-input:focus {
            outline: none;
            border-color: #ffd700;
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }

        .profile-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .profile-error {
            color: #f44336;
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: block;
        }

        .profile-success {
            color: #4caf50;
            font-size: 0.9rem;
            margin-left: 1rem;
        }

        .profile-btn-primary {
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            color: #1a1a2e;
            padding: 0.9rem 2rem;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        .profile-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.5);
        }

        .profile-btn-danger {
            background: rgba(244, 67, 54, 0.2);
            color: #f44336;
            padding: 0.9rem 2rem;
            border: 1px solid #f44336;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .profile-btn-danger:hover {
            background: rgba(244, 67, 54, 0.3);
            transform: translateY(-2px);
        }

        .profile-btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 0.9rem 2rem;
            border: 1px solid rgba(255, 215, 0, 0.3);
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .profile-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            padding: 2rem;
        }

        .modal-content {
            background: rgba(26, 26, 46, 0.98);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2.5rem;
            max-width: 500px;
            width: 100%;
            border: 1px solid rgba(255, 215, 0, 0.2);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .modal-content h2 {
            color: #ffd700;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .modal-content p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1.5rem;
        }

        .modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 2rem;
        }
    </style>
</x-app-layout>
